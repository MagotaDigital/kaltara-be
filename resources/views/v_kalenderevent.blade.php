@extends('layout/v_template')

@section('content')
<div class="position-relative">
    <main>
        <section class="position-relative w-100"
            style="background-image:radial-gradient(56.33% 56.33% at 50.59% 43.67%, rgba(0, 23, 28, 0.5) 0%, rgba(0, 11, 14, 0.7) 46.15%, rgba(0, 11, 14, 0.82) 100%), url('https://jabarprov.go.id/images/jumbotron/default.webp'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container mx-auto px-5 position-relative pt-24 pb-40 z-10"
                style="padding-top: 6rem; padding-bottom: 10rem;">
                <section class="mb-6">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </section>
                <h3 class="font-lora fw-bold text-white">
                    Calendar Event
                </h3>
                <div>
                    <h6 class="font-lato fw-normal text-white line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eum sint officiis debitis incidunt
                        sapiente corporis recusandae quibusdam perspiciatis eius, eos, esse fugit quam ullam excepturi
                        eaque id, optio provident.
                    </h6>
                </div>
            </div>
        </section>
        <section class="w-100 bg-light">
            <div class="container mx-auto px-5 position-relative -top-24" style="top: -6rem;z-index: 20;">
                <div class="p-3 py-4 rounded bg-white gap-4" style="min-height: 377px;">
                    <div id="calendar"></div>
                </div>
            </div>
        </section>

    </main>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            defaultView: 'month',
            events: [
                {
                    title: 'Divyesh Birthday',
                    start: '2023-12-21' // change with current date

                },
                {
                    title: 'Roshni Birthday',
                    start: '2023-12-20'
                },
            ]
        });
    });
</script>
<style>
    .fc-day-grid-event {
        padding: 1rem !important;
        color: white !important;
    }
</style>
@endsection
