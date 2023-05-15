<x-layout>
    <div class="w-full h-screen flex items-start justify-center relative">
        <img src={{ asset('./images/bg.webp') }} alt="bg" class="absolute left-0 right-0 bottom-0 w-full h-full object-cover">
        <div class="absolute left-0 right-0 bottom-0 w-full h-full bg-gradient-to-l from-[rgba(0,0,0,0.3)] to-[rgba(0,0,0,0.5)] z-10"></div>
        <div class="container mx-auto z-20">
            <div class="mt-[10rem] w-full h-[70px] bg-gradient-to-r from-[rgba(255,255,255,0.3)] to-[rgba(255,255,255,0.4)] flex items-center justify-between pl-10 rounded-md backdrop-blur-sm">
                <ul class="flex items-center gap-5 text-white text-xl font-medium">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transcripts</a></li>
                    <li><a href="#">Internships</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <button class="bg-orange-500 h-full px-8 text-white text-xl rounded-r-md uppercase font-medium">Place Request</button>
            </div>
        </div>
    </div>
</x-layout>