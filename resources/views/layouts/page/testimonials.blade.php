
        <div class="testimonials">
            @foreach($testimonials as $testimonial)
                <p><i class='fa fa-quote-left fa-2x pull-left'></i>
                    {{$testimonial->contenido}} <i class='fa fa-quote-right fa-2x'></i>
                </p>
                <p class='text-right author margin-bottom-60 margin-top-30'><b>{{$testimonial->nombre}}</b> <span class='text-info'>{{$testimonial->ciudad}}</span></p>
            @endforeach
                <div class="margin-top-30 text-center">
                    {{ $testimonials->render() }}
                </div>
        </div>
