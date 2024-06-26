<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation, $terms;
    public $tabs = [
        'athlete' => 'Atleta',
        'personal-trainer' => 'Personal Trainer',
    ];
    public $currentTab = 'athlete';

    public function register() {
        $this->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'terms' => ['required']
        ]);

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'status' => 'pending'
        ]);

        $user->assignRole('personal-trainer');

        $user->informations()->create();

        $user->sendEmailVerificationNotification();

        Auth::login($user);

        return redirect(RouteServiceProvider::ONBOARDING_STEP_1);
    }
    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }
}
