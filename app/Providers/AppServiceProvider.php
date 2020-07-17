<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\User;
use Auth;
use App\Permohonan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('*', function ($view)
      {
        if(Auth::user()){
          $count_notification = 0;
          $permohonans = Permohonan::get();
          $permohonan_admin = [];
          foreach ($permohonans as $permohonan) {
            // dd($permohonan->unreadNotifications);
            foreach ($permohonan->unreadNotifications as $notification) {
              // dd($notification->data['kepada_id']);
              if($notification->data['kepada_id'] == Auth::user()->id){
                $permohonan_admin = Permohonan::get();
                $count_notification++;
              }
            }
          }
          // return view('home', compact('nama', 'permohonan_admin' ,'count_notification'));
          $view->with('permohonan_admin', $permohonan_admin);
          $view->with('count_notification', $count_notification);
          // view()->compact('nama', 'permohonan_admin' ,'count_notification');
        }
      });
    }
}
