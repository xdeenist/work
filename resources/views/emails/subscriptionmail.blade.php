@component('mail::message')
# Username

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur repellendus, commodi nam quasi necessitatibus quisquam quam, quae quibusdam cupiditate quis perspiciatis accusamus a distinctio, dolores sequi dolorem mollitia rem accusantium magni. Fuga inventore, non esse ab alias consequatur, velit ullam reprehenderit eius, porro et? Velit qui odio nesciunt, quas modi.


@component('mail::button', ['url' => 'http://localhost/'])
Click
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent