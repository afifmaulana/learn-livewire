@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="list-group list-group-flush">
                <ul class="nav nav-tabs center" id="myTab" role="tablist">
                    <li class="list-group-item">
                        <a class="list-group-item list-group-item-action active" id="category-tab" data-toggle="tab" href="#category"
                            role="tab" aria-controls="category" aria-selected="false">Category</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item list-group-item-action" id="industry-tab" data-toggle="tab" href="#industry" role="tab"
                            aria-controls="industry" aria-selected="false">Industry</a>
                    </li>
                </ul>
            </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="category" role="tabpanel" aria-labelledby="category-tab">
                        <div class="col-lg-12 col-md-12">

                                <div class="col-12 center mt-5">
                                    <h4 class="text-color">CRUD Category</h4>
                                </div>

                            <div class="col-lg-12 col-md-12">

                                    <div class="card">
                                        <div class="card-header">CATEGORY</div>

                                        <div class="card-body">

                                            <livewire:category.category-index></livewire:category.category-index>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="industry" role="tabpanel" aria-labelledby="industry-tab">
                        <div class="col-lg-12 col-md-12">

                            <div class="col-12 center mt-5">
                                <h4 class="text-color">CRUD Industry</h4>
                            </div>

                        <div class="col-lg-12 col-md-12">

                                <div class="card">
                                    <div class="card-header">INDUSTRY</div>

                                    <div class="card-body">

                                        <livewire:industry.industry-index></livewire:industry.industry-index>
                                    </div>
                                </div>

                        </div>
                    </div>
                    </div>
                </div>

    </div>
@endsection
