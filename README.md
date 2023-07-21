# Welcome to our exciting project!

# Git Basics

Please :
- Create a new branch for your commits : 1 branch per issue or group of small issues, then delete your branch
- Insert the **issue number in your commits**
- Push on your branch at least once every day 
- When your work on the issue is finished, please ask for a **pull request**
- Don't push anything directly to the *main* branch


I will manage the project's **kanboard**, creating and assigning new tasks. I will link every task to an issue.
- When you begin working on an issue, please move the task to "In progress" column
- When the issue will be closed, the task will automatically move to the "Done" column



# Local Env

I suggest using [Laravel Homestead](https://laravel.com/docs/8.x/homestead) for your local env. Here is my Homestead.yaml :

    folders:
        - map: ~/code/vagrant
          to: /var/www
    
    sites:
        - map: cadeaucity.test
          to: /var/www/cadeaucity/public
          php: "8.0"
    
    databases:
        - homestead
    
    features:
        - mysql: false
        - mariadb: true
        - postgresql: false
        - ohmyzsh: false
        - webdriver: false

 Then :

    vagrant ssh
    cd /var/www
    laravel --jet new cadeaucity # (choose Livewire and no teams)
    cd cadeaucity
    npm install && npm run dev

Edit your Homestead .env with :

> DB_DATABASE=homestead  
> DB_USERNAME=homestead   
> DB_PASSWORD=secret

Then :

    art migrate
    
Now create your first user, for example :

    art tinker
    >>> $user = new \App\Models\User;
    => App\Models\User {#3523}
    >>> $user->name = 'Mathieu';
    => "Mathieu"
    >>> $user->email = 'mathieu@l5c.fr';
    => "mathieu@l5c.fr"
    >>> $user->password=Hash::make('my-password');
    => "$2y$10$Jiv/q2T3ZNk87dv41C4NO.BfM15K/bjeIbVyXKC.aLjygUoZH0C/i"
    >>> $user->save();
    => true


And you're ready! Go to http://cadeaucity.test 
(don't forget to add "192.168.10.10	cadeaucity.test" 
in your /etc/hosts) 


# Preprod Env

I created a preprod env on AWS using Laravel Forge. It's connected to our main branch and to the URL http://new.cadeaucity.com
Deployments are manual by clicking on a button, will be enough for now. 




"# cade" 
