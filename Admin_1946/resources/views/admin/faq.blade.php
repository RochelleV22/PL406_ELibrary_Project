@extends('admin.layouts.master', ['title' => 'Frequently Asked Questions'])

@section('content')

    <!-- Intro Block -->
    <div class="block">
        <!-- Intro Title -->
        <div class="block-title">
            <h2>About software </h2>
        </div>
        <!-- END Intro Title -->

        <!-- Intro Content -->
        <div id="faq1" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-left"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1"><strong>Welcome to the digital library system</strong></a>
                    </div>
                </div>
                <div id="faq1_q1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>Here is the description of the software</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-left"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2"><strong>Who is the software developer?</strong></a>
                    </div>
                </div>
                <div id="faq1_q2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Yes Yes </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Intro Content -->
    </div>
    <!-- END Intro Block -->

    <!-- Functionality Block -->
    <div class="block">
        <!-- Functionality Title -->
        <div class="block-title">
            <h2>Function</h2>
        </div>
        <!-- END Functionality Title -->

        <!-- Functionality Content -->
        <div id="faq2" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-left"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1"><strong>Is your software responsive?</strong></a>
                    </div>
                </div>
                <div id="faq2_q1" class="panel-collapse collapse">
                    <div class="panel-body">Undoubtedly, our software will work well in all browsers !!</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-left"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2"><strong>Is the data sent and received securely in this software?</strong></a>
                    </div>
                </div>
                <div id="faq2_q2" class="panel-collapse collapse">
                    <div class="panel-body">To your heart's content :)</div>
                </div>
            </div>
        </div>
        <!-- END Functionality Content -->
    </div>
    <!-- END Functionality Block -->

@endsection