@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        
        <video class="" src="/Users/liammoore/Library/CloudStorage/OneDrive-DundalkInstituteofTechnology/Server Side Development/Laravel-Project/public/images/trailer.mp4"></video>
        <div class="flex text-gray-100 pt-10">
            <div class=" m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <div class=" flex w-4/12 mx-auto mb-20 bg-center ">
            <img class="mwLogo" src="https://imgs.callofduty.com/content/dam/atvi/callofduty/cod-touchui/mw3/common/logos/COD_MW3_Logo.png" alt="">
        </div>
                <h1 class="sm:text-gray-100 text-5xl uppercase font-bold text-shadow-md pb-14">
                "In the war that changed the world, no one fought alone."

                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-1xl">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/mw3/home/modes/campaign-img.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">

            <h2 class="text-3xl font-extrabold text-red-600">
                CAMPAIGN
            </h2>

            <h2 class="text-3xl font-extrabold  text-gray-600">
                ADAPT OR DIE IN A FIGHT AGAINST THE ULTIMATE THREAT
            </h2>
            
            <p class="font-extrabold text-gray-600 text-s pb-9">
            Combat means making choices – different loadouts, different paths through the mission. In addition to the signature, cinematic Call of Duty campaign missions, Call of Duty: Modern Warfare III introduces open combat missions that provide more player choice.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-red-600 hover:bg-red-700 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>

        <div>
            <img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/mw3/home/modes/multiplayer-img.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">

            <h2 class="text-3xl font-extrabold text-red-600">
                MULTIPLAYER
            </h2>

            <h2 class="text-3xl font-extrabold  text-gray-600">
            IT'S TIME TO SETTLE OLD SCORES AND START NEW ONES
            </h2>
            
            <p class="font-extrabold text-gray-600 text-s pb-9">
            Dive into 16 modernized maps from the original Modern Warfare 2 (2009) with new modes and gameplay features, and over 12 all-new core 6v6 maps rolling out during post-launch live seasons. Plus, new Ground War maps boasting innovative play spaces and the epic return and evolution of the popular War Mode that first debuted in 2017’s Call of Duty: WWII.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-red-600 hover:bg-red-700 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>

        <div>
            <img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/mw3/home/modes/zombies-screenshot.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">

            <h2 class="text-3xl font-extrabold text-red-600">
                ZOMBIES
            </h2>

            <h2 class="text-3xl font-extrabold  text-gray-600">
            ALL NEW OPEN WORLD ZOMBIES
            </h2>
            
            <p class="font-extrabold text-gray-600 text-s pb-9">
            For the first time, team up with other squads to survive and fight massive hordes of the undead in the largest Call of Duty Zombies map ever. Call of Duty: Modern Warfare III Zombies (MWZ) tells a new Treyarch Zombies story with missions, core Zombies features, and secrets to discover. Ready up for an open world PvE survival experience against some of the biggest enemies in Call of Duty history.​ 
            </p>

            <a 
                href="/blog"
                class="uppercase bg-red-600 hover:bg-red-700 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class=" sm:grid grid-cols-2 gap-20 p-15 bg-black text-white">


    <div>
            <img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/mw3/home/seasons/MWIII_S2_Season-2.webp" width="700" alt="">
        </div>
        
    
    <div class="m-auto sm:m-auto text-left w-4/5 block">

            <h2 class="text-3xl font-extrabold text-white">
            PLAY SEASON 2 NOW!
            </h2>

            
            <p class="font-extrabold text-gray-600 text-s pb-9">
            Compete across several new multiplayer maps, and multiple new game modes. Climb the ranks in Season 2 of Ranked Play, take on the next Zombies story mission, and more.
            </p>

        
        </div>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Cod Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
           Thanks for visiting 
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
        ©COD BLOG
        </p>
    </div>

    
    </div>
@endsection