<x-app-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Set Your weekly hours</h4>
                    </div>
                    <div class="create-workform">
                        <button type="button" class="btn btn-primary position-relative d-flex align-items-center justify-content-between" data-toggle="modal" data-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add New Event
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body">
                                <div id="calendar1" class="calendar-s"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-between align-items-center pb-3">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Event Title</label>
                            <input type="text" class="form-control" id="Text1" placeholder="Enter Event Title">
                        </div>
                        <div class="col-md-12">
                            <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Date & Time</label>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control vanila-datepicker" name="range-start" placeholder="Start Date">
                                <div class="input-group-append">
                        <span class="input-group-text">
                           <svg xmlns="http://www.w3.org/2000/svg" class="" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                           </svg>
                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control vanila-datepicker" name="range-end" placeholder="End Date">
                                <div class="input-group-append">
                        <span class="input-group-text">
                           <svg xmlns="http://www.w3.org/2000/svg" class="" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                           </svg>
                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-check form-check-inline">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox1">
                                    <label class="custom-control-label" for="inlineCheckbox1">All Day</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox2" checked>
                                    <label class="custom-control-label" for="inlineCheckbox2">Does not repeat</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="inputState" class="form-label font-weight-bold text-muted text-uppercase">Category</label>
                            <select id="inputState" class="form-select form-control choicesjs">
                                <option selected="">Select Category</option>
                                <option>
                                    Appointments
                                </option>
                                <option>Birthday</option>
                                <option>Meetings</option>
                                <option>Tour</option>
                                <option>Anniversary</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase">Description</label>
                            <textarea class="form-control" id="Text9" rows="2" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">Add Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('bottom_script')
        <script src="{{ asset('vendor/fullcalendar/core/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/daygrid/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/timegrid/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/list/main.js') }}"></script>
    @endsection
</x-app-layout>
