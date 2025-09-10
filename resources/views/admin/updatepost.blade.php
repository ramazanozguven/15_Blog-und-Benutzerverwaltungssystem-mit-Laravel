<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (Auth::check()&& Auth::user()->usertype=='admin')
                {{ __('Admin Dashboard') }}
            @else
                {{ __('User Dashboard') }}             
            @endif
            
        </h2>
    </x-slot>
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="text-align: center; border:1px solid blue; padding:20px; margin:20px;">

                    

                    <form action="{{route('admin.postupdate', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1 style="margin: 15px; font-size:25px;">Update Post Page</h1>
                        
                        <input style="width: 500px; height:50px" type="text" name="title" value="{{$post->title}}">
                        <br><br>
                        <textarea style="width: 500px; height:400px" name="description" >
                            {{$post->description}}
                        </textarea>
                        <br><br>
                        <img src="{{asset('img/'.$post->image)}}" alt="{{$post->image}}" style="width: 500px; height: 300px;  margin-bottom: 40px; display: block; margin-left: auto; margin-right: auto;">
                        <hr>
                        <label for="image">Upload a new image, wenn you will</label> <br><br>
                        <input type="file" name="image" > <br><br>
                        <input type="submit" name="submit" value="Update Post" style="border:1px solid blue; text-align:center; padding:10px; background-color:blue; color:white; border-radius:5px;">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
</x-app-layout>

    