<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $results = [];
    public $keyword = '';
    public $dropdown = false;
    private $endpoint = "http://api.cadeaucity.com";

    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.search');
    }
    public function doSearch()
    {

        if(strlen($this->keyword)>=4)
        {
            if(is_numeric($this->keyword))
            {
                $field = "reference";
            }else {
                if(!preg_match('~[0-9]+~', $this->keyword)){
                    $field = "name";
                }
                else{
                    $field = "both";
                }
            }

            if($field !="both"){
                $this->results = $this->getApiResult($field);
            }
            else{
                $result1 = $this->getApiResult("name");
                $result2 = $this->getApiResult("reference");
                $res = array_merge($result1, $result2);
                $this->results = array_slice($res, -10, '', false);
            }
            $this->switchDropdown(true);
        }else {
            $this->results = [];
            $this->switchDropdown();
        }
    }

    public function getApiResult($field)
    {
        \Log::info("API call");
        $response = Http::get("{$this->endpoint}/api/product?n=10&filter[{$field}]={$this->keyword}");
        if($response->ok())
        {
            $results = json_decode($response->body())->data?? [];
        }else{
            $results = [];
        }
        return $results;
    }

    public function chooseItem($item)
    {
        $this->keyword = $item;
        $this->switchDropdown();
    }
    public function switchDropdown($status = false)
    {
        $this->dropdown = $status;
    }
}
