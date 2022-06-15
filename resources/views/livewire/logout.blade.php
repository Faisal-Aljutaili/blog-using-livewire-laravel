
<?php   

// Session_start();
// session_destroy();
auth()->logout();
// setTimeout(function () {
//     redirect('/')->with('success', 'Goodbye!');

// },1000); // 5 seconds
header('Refresh: 1; URL=http://livewire.test/');


?>

{{-- <div>
    
    <a href="/" class="mr-5 hover:text-gray-900">return</a>
    </div> --}}