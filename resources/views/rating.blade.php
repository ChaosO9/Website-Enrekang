<!DOCTYPE html>
<html>

<head>
    <title>Rating System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rating').click(function() {
                var ratingValue = $(this).data('value');
                var userId = {{ Auth::user()->id }};
                var itemId = {{ $item->id }};
                $.ajax({
                    type: 'POST',
                    url: '/ratings',
                    data: {
                        user_id: userId,
                        item_id: itemId,
                        rating_value: ratingValue,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        alert(data.message);
                    }
                });
            });
        });
    </script>
    @vite([])
</head>

<body>
    <h1>Rate this item:</h1>
    <div>
        <button class="btn btn-outline-primary rating" data-value="1">1</button>
        <button class="btn btn-outline-primary rating" data-value="2">2</button>
        <button class="btn btn-outline-primary rating" data-value="3">3</button>
        <button class="btn btn-outline-primary rating" data-value="4">4</button>
        <button class="btn btn-outline-primary rating" data-value="5">5</button>
    </div>
</body>

</html>
