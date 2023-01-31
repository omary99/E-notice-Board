@extends('home_dashboard')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Lists') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <!-- category Details dropping down -->
    
            <ul class="nav flex-column">             
                    <li class="nav-item">
                        <i class='bx bx-briefcase'></i>&nbsp; &nbsp;
                        <a class="link" href="{{url('/TravelPage')}}">Travel</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <i class='bx bx-news'></i>&nbsp; &nbsp;
                        <a class="link" href="{{url('/MeetingPage')}}">Meeting</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <i class='bx bx-fork' ></i>&nbsp; &nbsp;
                        <a class="link" href="{{url('/HolidayPage')}}">Holiday</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <i class='bx bx-book-open'></i>&nbsp; &nbsp;
                        <a class="link" href="{{url('/TrainingPage')}}">Training</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <i class='bx bx-envelope' ></i>&nbsp; &nbsp;
                        <a class="link" href="{{url('/IctPage')}}">Ict</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <i class='bx bx-collection'></i>&nbsp; &nbsp;
                        <a class="link" href="{{url('/OtherAnnouncementsPage')}}">Other Announcements</a>
                    </li>
            </ul>

        </div>
    </div>
</x-app-layout>
@endsection
