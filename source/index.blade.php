@extends('_layouts.master')

@section('body')
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
        <div class="flex flex-col-reverse mb-10 lg:flex-row">
            <div>
                <p class="text-lg">Providing private evaluations including assessment of cognitive abilities, academic
                    achievement and the processing skills necessary for efficient learning. Evaluations to determine if
                    such conditions as dyslexia, dysgraphia, specific learning disabilities or gifted characteristics
                    are present. Assessments completed in conjunction with the essential components as defined by the
                    New Mexico Technical Evaluation and Assessment Manual (TEAM) as well as section 504 of the Americans
                    with Disabilities Act.</p>
            </div>
            <div>
                <img src="/assets/images/office.png">
            </div>
        </div>

        <div class="md:flex lg:mb-24">
            <div class="text-xl">
                Julianne (Glinski) Hancock, MA<br/>
                <span class="text-xs">
                Licensed School Psychologist<br/>
                Licensed Educational Diagnostician<br/>
                Nationally Certified School Psychologist<br/>
            </span>
            </div>
        </div>

        <hr class="block my-8 border lg:hidden">

        <div class="md:flex -mx-2 -mx-4">
            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <div class="flex">
                    <div>
                        <img src="/assets/img/location.svg" class="h-8 w-8">
                    </div>
                    <div class="text-lg ml-2">
                        10105 Coronado Ave NE<br/>
                        Albuquerque, NM 87122
                    </div>
                </div>

            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <div class="flex">
                    <div>
                        <img src="/assets/img/phone.svg" class="h-8 w-8">
                    </div>
                    <div class="text-lg ml-2">
                        505.239.6328
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
