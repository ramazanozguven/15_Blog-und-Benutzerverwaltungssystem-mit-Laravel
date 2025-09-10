<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(Auth::check() && Auth::user()->usertype == 'admin')
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
                <div class="p-6 text-gray-900">

                    @if(session('status'))
                    <div class="alert alert-success" style="color:green; font-size:20px; border:1px solid green; padding:10px; margin-bottom:10px; border-radius:5px;">
                        {{session('status')}}
                    </div>
                    @endif 

                    <!--  all post   -->
                    <h1 style="color: black; text-align: center; margin-bottom: 30px; font-size:35px;">Posts Management</h1>
    
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; background-color: white; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                            <thead>
                                <tr style="background-color: #4CAF50; color: white;">
                                    <th style="padding: 12px 15px; text-align: left;">ID</th>
                                    <th style="padding: 12px 15px; text-align: left;">Title</th>
                                    <th style="padding: 12px 15px; text-align: left;">Description</th>
                                    <th style="padding: 12px 15px; text-align: left;">Image</th>
                                    <th style="padding: 12px 15px; text-align: left;">Actions</th>
                                    <th style="padding: 12px 15px; text-align: left;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($post as $posts)
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td style="padding: 12px 15px;">{{$posts->id}}</td>
                                    <td style="padding: 12px 15px;">{{$posts->title}}</td>
                                    <td style="padding: 12px 15px;">{{Str::limit($posts->description,100)}}</td>
                                    <td style="padding: 12px 15px;"><img style="width: 100px; height: 100px;" src="{{asset('img/'.$posts->image)}}" alt="{{$posts->image}}">
                                    <td style="padding: 12px 15px;">
                                        <a href="{{route('admin.update',$posts->id)}}" style="background-color: #2196F3; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; margin-right: 5px;">Update</a>
                                    </td>
                                    <td style="padding: 12px 15px;">
                                        <a href="{{route('admin.deletepost', $posts->id)}}" style="background-color: #f44336; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>