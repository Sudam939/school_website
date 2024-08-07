<x-frontend-layout>
    <section>
        <div class="container">
            <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
                @foreach ($notices as $notice)
                    <a href="{{ asset($notice->image) }}" target="_blank">{{ $notice->subject }}</a>
                @endforeach
            </marquee>
        </div>
    </section>


    <section>
        <div class="container">
            @foreach ($member_categories as $category)
                @if (count($category->members) > 0)
                    <div>
                        <h1>{{ $category->title }}</h1>
                        <div>
                            @foreach ($category->members as $member)
                                <h5>{{$member->name}}</h5>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
</x-frontend-layout>
