@extends('layouts.master')
@section('content')


<body>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>@lang('massages.project')</h2>
                    <ol>
                        <li><a
                                href="{{route('home',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">@lang('massages.home')</a>
                        </li>
                        <li><a
                                href="{{route('portfolio',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">@lang('massages.project')</a>
                        </li>
                        <li>@lang('massages.project-details')</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                @foreach($pro as $project)
                <div class="row">
                    <div class="col-lg-8 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="{{ asset('storage/'.$project->image) }}" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <h1><b>{{ $project->title }}</b> </h1>
                            </h2>

                            <div class="entry-content">
                                <blockquote>
                                    <p>
                                        {{$project->description }}
                                    </p>
                                </blockquote>
                            </div>
                        </article><!-- End blog entry -->
                    </div>
                </div>

                @endforeach
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('projects.more', app()->getLocale()) }}" class="btn btn-primary mt-3">
                            {{ __('Load More') }}
                        </a>
                    </div>
                </div>

            </div>
        </section><!-- End Blog Single Section -->


    </main><!-- End #main -->


</body>

@endsection