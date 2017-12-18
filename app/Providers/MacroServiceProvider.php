<?php namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    
    public function boot(){
        
        Form::macro('labelWithImage', function ($name, $path, $class) {
            $realPath = asset($path);

                return '<label class="'.$class.'" for="'.$name.'">'.'<img src="'.$realPath.'"/></label>';
 
        });
    }
    
    public function register(){
        

        

    }
}