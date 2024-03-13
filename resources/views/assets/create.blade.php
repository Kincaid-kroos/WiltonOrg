
@extends('general.layout')




@section('content')

<div class="container mx-auto mt-8">
  <h2 class="text-2xl font-bold mb-4">Register New Asset</h2>
  
  <form  method="post" class="space-y-4">
      
      <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Asset Name:</label>
          <input type="text" name="name" id="name" required class="mt-1 p-2 border w-full">
      </div>
      
      <div>
          <label for="category" class="block text-sm font-medium text-gray-700">Category:</label>
          <input type="text" name="category" id="category" required class="mt-1 p-2 border w-full">
      </div>
      
      <button type="submit" class="bg-blue-500 text-white p-2">Register Asset</button>
  </form>
</div>

    
@endsection
    
    