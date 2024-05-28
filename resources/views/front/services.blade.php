@extends('front.layouts.app')
@section('title', 'Portofolio Robby Ilham')
@section('content')

<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
    {{-- <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10">
        <a href="index.html" class="w-[161px] flex shrink-0 h-fit w-fit">
            <img src="{{asset('images/logos/logo.svg')}}" alt="logo">
        </a>
        <div class="flex gap-[50px] items-center">
            <ul class="flex gap-[50px] items-center text-white">
                <li>
                    <a href="index.html"  class="text-lg font-medium transition-all duration-300 hover:text-portto-light-gold">Home</a>
                </li>
                <li>
                    <a href=""  class="text-lg font-medium transition-all duration-300 hover:text-portto-light-gold">Services</a>
                </li>
                <li>
                    <a href=""  class="text-lg font-medium transition-all duration-300 hover:text-portto-light-gold">Testimonials</a>
                </li>
                <li>
                    <a href=""  class="text-lg font-medium transition-all duration-300 hover:text-portto-light-gold">Pricing</a>
                </li>
                <li>
                    <a href=""  class="text-lg font-medium transition-all duration-300 hover:text-portto-light-gold">About</a>
                </li>
            </ul>
            <button class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
        </div>
    </nav> --}}
     <x-nav/>
    <div class="hero container max-w-[1130px] mx-auto flex justify-between items-center relative">
        <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10">
            <p class="text-2xl font-semibold">I’m Robby Ilham 👋</p>
            <h1 class="font-extrabold text-[80px] leading-[90px]">My Freelance Services</h1>
            <button class="font-bold text-[26px] leading-[39px] rounded-[30px] p-[30px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Explore Now</button>
        </div>
        <div class="flex max-w-[471px] max-h-[567px] z-10">
            <img src="{{asset('images/image-hero_rb.png')}}" class="object-contain w-full h-full" alt="hero image">
        </div>
        <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" alt="background icon">
    </div>
    <div class="company-logos w-full overflow-hidden pb-[190px]">
        <div class="flex items-center group/slider flex-nowrap w-max">
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap">
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">$230M</p>
            <p class="text-lg font-semibold">Valuation</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">31,934</p>
            <p class="text-lg font-semibold">Projects</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">245</p>
            <p class="text-lg font-semibold">Startups IPO</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">9/10</p>
            <p class="text-lg font-semibold">Successful</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">562</p>
            <p class="text-lg font-semibold">Companies</p>
        </div>
    </div>
</section>

<x-faq/>

<x-footer/>

@push('after-script')
<script src="{{ asset('js/main.js') }}"></script>
@endpush
@endsection