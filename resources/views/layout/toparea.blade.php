<div class="py-1 toparea">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center md:items-center space-y-3 md:space-y-0 md:space-x-4">
        <div class="flex space-x-1">
            <a href="/" target="_blank" class="font-small flex items-center fa__icons"><i class="fa fa-facebook"></i></a>
            <a href="/" target="_blank" class="font-small flex items-center fa__icons"><i class="fa fa-twitter"></i></a>
            <a href="{{url('https://github.com/GDCFrisal')}}" target="_blank" class="font-small flex items-center fa__icons"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="flex space-x-1 mt-4 md:mt-0">
            {{-- <a href="#" class="button_top font-small py-1 px-4"><i class="fa-solid fa-user px-1"></i>Student Login</a> --}}
            <a href="{{ route ('admin.login')}}" class="button_top font-small py-1 px-4"><i class="fa-solid fa-user px-1"></i>Admin Login</a>
            <a href="{{ route('grievance')}}" class="button_top font-small py-1 px-4"><i class="fa-solid fa-comments px-1"></i>Grievance</a>
        </div>
    </div>
</div>