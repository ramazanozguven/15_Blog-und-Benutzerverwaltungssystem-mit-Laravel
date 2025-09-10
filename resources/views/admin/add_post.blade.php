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

                    @if(session('status'))
                    <div class="alert alert-success" style="color:green; font-size:20px; border:1px solid green; padding:10px; margin-bottom:10px; border-radius:5px;">
                        {{session('status')}}
                    </div>
                    @endif

                    


                    <form action="{{route('admin.createpost')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1 style="margin: 15px; font-size:25px;">Add Post Page</h1>
                        <input style="width: 400px; height:50px" type="text" name="title" placeholder="Enter Post Title" >
                        <br><br>
                        <textarea style="width: 400px; height:400px" name="description" placeholder="Enter Post Description" ></textarea>
                        <br><br>
                        <input type="file" name="image" > <br><br>
                        <input type="submit" name="submit" value="Add Post" style="border:1px solid blue; text-align:center; padding:10px; background-color:blue; color:white; border-radius:5px;">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
</x-app-layout>

    