<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
</head>

<body class="mb-48">



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

    </body>
    </html>