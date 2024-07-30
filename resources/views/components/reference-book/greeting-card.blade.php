<div class="card mt-12 bg-gradient-to-l from-pink-300 to-indigo-400 p-5 sm:mt-0 sm:flex-row">
<div class="flex justify-center sm:order-last">
        <img class= "h-full sm:mt-0" src="{{$imageSrc}}" alt="">
    </div>
    <div class="mt-2 flex flex-1 flex-col justify-between pt-2 text-center text-white sm:mt-0 sm:text-left">
        <div>
            <h3 class="text-xl">
                {{$title}}
            </h3>
            <p class="mt-2 leading-relaxed">
                {{$subTitle}}
            </p>
        </div>
        <div>
            <a href="{{route($route)}}" class="btn mt-6 bg-slate-50 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                {{$linkTitle}}
            </a>
        </div>
    </div>
</div>
