@extends('layout')
@push('styles')
    {{-- Vendor styles --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/metisMenu/dist/metisMenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" />

    {{-- App styles --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke/css/helper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    {{-- Vendor styles --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
@endpush
@section('content')
    @include('flash-message')
    <div class="table-responsive">
        <table class="table" id="properties" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>County</th>
                <th>Country</th>
                <th>Town</th>
                <th>Description</th>
                <th>Address</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Bedrooms</th>
                <th>Bathrooms</th>
                <th>Price</th>
                <th>Property Type</th>
                <th>Sale / Rent</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
@push('scripts')
    <!-- Vendor scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#properties').dataTable( {
                "processing": true,
                "ajax": "{{ route('property.list') }}",
                columns : [
                    { data: 'county' },
                    { data: 'country' },
                    { data: 'town' },
                    { data: 'description' },
                    { data: 'address' },
                    { data: 'latitude' },
                    { data: 'longitude' },
                    { data: 'num_bedrooms' },
                    { data: 'num_bathrooms' },
                    { data: 'price' },
                    { data: 'property_type' },
                    { data: 'type' },
                    { data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/admin/property/show/'+data+'\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/admin/property/delete/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
                        }
                    },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            } );
        } );
    </script>
@endpush
