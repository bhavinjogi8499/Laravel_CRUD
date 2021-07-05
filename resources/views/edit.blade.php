<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Row</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			
					
			#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 18px;
}

/*#customers tr:nth-child(even){background-color: #f2f2f2;}*/

/*#customers tr:hover {background-color: #ddd;}*/

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.btn{
	background:#ccc;
	padding:15px 20px;
	 border-radius:8px;
	 color:purple;
	 font-weight:bold;
	 text-decoration:none;
	 cursor:pointer;
	 border:none
}

.btn_edit{
	background:#ccc;
	padding:15px 20px;
	 border-radius:8px;
	 color:blue;
	 font-weight:bold;
	 text-decoration:none;
	
}

.btn_delete{
	background:#ccc;
	padding:15px 20px;
	 border-radius:8px;
	 color:red;
	 font-weight:bold;
	 text-decoration:none;
	 
}

.text{
	padding:10px;
	border-radius:5px;
	border:solid 1px #ccc
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
			<a href="{{ url('/inv_show/')}}" class="btn_edit" ><< Back</a>
			<br/>
			
			<br/>
			<br/>
			<form method="post" action="{{route('inv.update',[$todoArr->id])}}">
			{{ csrf_field() }}  
			<table id="customers">
				<tr>
				<td>Name</td>
				<td><input type="text" name="name" required value="{{$todoArr->name}}" class="text" /></td>
				</tr>
				<tr>
				<td>Email</td>
				<td><input type="email" name="email"  required value="{{$todoArr->email}}" class="text" /></td>
				</tr>
				<tr>
				<td>Password</td>
				<td><input type="password" name="pwd" required value="{{$todoArr->pwd}}" class="text" /></td>
				</tr>
				<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" required value="{{$todoArr->phone}}" class="text" /></td>
				
				</tr>
				<tr>
				<td colspan="2"><input type="submit" name="submit" value="Update" class="btn" /></td>
				</tr>
			</table>
			</form>

            </div>
        </div>
    </body>
</html>
