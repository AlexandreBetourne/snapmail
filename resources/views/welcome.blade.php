<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
</head>

<body>
    <div class="container">
      <h1 class="is-size-1 has-text-primary has-text-centered	">Snapmail</h1>
        <section class="section">
            <form class="" action="{{ route('form.post') }}" method="post">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Nom</label>
                    <div class="control">
                        <input class="input" name="name" type="text" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" name="email" type="email" required/>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea has-fixed-size" name="message" required></textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Submit</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
