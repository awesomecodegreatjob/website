<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user
                            { name : The new user\'s name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new site user';

    /**
     * @var User
     */
    private $user;


    /**
     * Create a new command instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $username = $this->argument( 'name' );

        $email = $this->ask( 'Input user email' );

        $password = $this->secret( 'Input password' );
        $password_confirm = $this->secret( 'Confirm password' );

        if( $password == $password_confirm )
        {
            $this->user->create( [
                              'name'     => $username,
                              'email'    => $email,
                              'password' => $password,
                          ] );

            $this->info('User created: ' . $username );
        }
        else
        {
            $this->error('Problem creating user.');
        }
    }
}
