<div class="-z-50 m-2 bg-orange-100 text-gray-600  min-w-12 flex flex-col w-1/4 overflow-hidden shadow-sm rounded-md relative">
    <img class="w-full object-cover" src="{{Storage::url($recette->image)}}" alt="{{$recette->name}}">
    <div class="m-2">
        <div class="font-bold">{{$recette->name}}</div>
        <div>Par : {{$recette->user->username}}</div>
    </div>
    <div class="absolute w-auto top-2 left-2 bg-green-400 text-white p-1 text-sm rounded-lg">
        <i class="fa-solid fa-clock mx-1"></i>{{$recette->duree}}
    </div>
    <div class="flex justify-between mx-10">
        <span class="p-1 my-1 mx-2 border-white bg-white border rounded-full">{{$recette->vue}} <i class="fa-solid fa-eye"></i></span>
        <span class="p-1 my-1 mx-2 border-white bg-white border rounded-full">{{$recette->commentes->count()}} <i class="fa-solid fa-comment-dots"></i></span>
    </div>
</div>