<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
</head>
<body>
    <h1>Your Dashboard</h1>

    <h3 @class([
        'text-bg',
        'text-red-500' => true,
        'underline' => false
    ])>users: </h3>


    <div>
        @isset($users)

            @forelse($users as $user)
                <div>
                    <h4>{{ $user['name'] }}</h4>
                    <p>{{ $user['age'] }}</p>
                    @foreach($user['attributes'] as $attr)
                        @if($loop->parent->first) @break @endif
                        <span>{{ $attr }}</span>
                    @endforeach
                </div>
            @empty
                <p>there is no user to show you</p>
            @endforelse

        @endisset

        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cupiditate error ipsam libero numquam omnis pariatur qui, recusandae soluta voluptates? Animi aperiam eum fugiat harum nemo numquam perferendis placeat praesentium. </p>

        @empty( $users)
            <p>ay baba!</p>
        @endempty

    </div>
</body>
</html>
