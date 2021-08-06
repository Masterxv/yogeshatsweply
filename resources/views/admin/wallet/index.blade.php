@extends('front.layout.dashboard-master')    
@section('main_content')
        <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">       
            <div class="content-body">
            <div>   
                @include('flash-message')               
                <div class="card mb-0">                 
                    <div class="m-2">
                        <div class="row">
                            <div class="users-list-filter col-6">
                                <div class="breadcrumb-main-bx">      
                                    <h3>Wallet Transactions</h3>
                                    <div class="breadcrumb-wrapper ">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{url('/')}}/user/dashboard">Home</a>
                                            </li>
                                            <li class="breadcrumb-item active">Wallet Transactions
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-6">
                                <div class="search-action-btn">
                                    <div class="search-filter-bx">
                                        <div class="search-bar">                               
                                            <input placeholder="Common Search" type="text" class="form-control round" id="myInputTextField">
                                            <div class="form-control-position">
                                                <i class="feather icon-search px-1"></i>
                                            </div>                                                                   
                                        </div>
                                    </div>
                                   <div class="filtter-btn">
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light filter-obj" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Filter 
                                                </button>
                                                <div class="dropdown-menu filter-obj-option" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                    <a class="dropdown-item" href="#" value="CREDIT">Credit</a>
                                                    <a class="dropdown-item" href="#" value="DEBIT">Debit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative table-responsive">
                        <table class="table b-table data-table">                            
                            <thead role="rowgroup" class="">                                
                                <tr role="row" class="">
                                    <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
                                        <div>TransactionID</div>
                                    </th>
                                    <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                        <div>Business</div>
                                    </th>
                                    <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                        <div>User</div>
                                    </th>
                                    <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                        <div>Transaction Type</div>
                                    </th>
                                    <th align="right" role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                        <div>Amount</div>
                                    </th>
                                     <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                        <div>Campaign</div>
                                    </th>
                                    <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                        <div>Transaction Date</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody role="rowgroup">
                            </tbody>                            
                        </table>
                    </div>
                    <div class="mx-2 mb-2 showing-entries-section">
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span class="text-muted">Showing 1 to 10 of 50 entries</span>
                            </div>                          
                        </div>
                    </div>                  
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var table = $('.data-table').DataTable({
            "bDestroy": true,
            processing: true,
            serverSide: true,
            ajax: {
              url: "{{url('/')}}/user/load-wallet-data",
              data: function (d) {
                    d.status = $('.filter-obj').attr('value'),
                    d.search = $('input[type="search"]').val()
                }
            },
             bAutoWidth: false, 
            "ordering": false,
            "bInfo":false,
            "bLengthChange": false,
            "paging": true,
            "bPaginate": false,
            "pageLength": 5,
            columns: [
                {data: 'id', name: 'transaction_id'},
                {data: 'business_name', name: 'business_name'},
                {data: 'user_name', name: 'user_name'},
                {data: 'transaction_type', name: 'transaction_type'},
                {data: 'amount', name: 'amount'},
                {data: 'campaign_name', name: 'campaign_name'},
                {data: 'transaction_date', name: 'transaction_date'},
            ]
        });
        
        $('#status').change(function(){
            table.draw();
        });

        oTable = $('.data-table').DataTable();   
        $('#myInputTextField').keyup(function(){
              oTable.search($(this).val()).draw() ;
        })

         $.fn.dataTable.ext.errMode = 'none';

        $('.data-table').on( 'error.dt', function ( e, settings, techNote, message ) {
             console.log( 'An error has been reported by DataTables: ', message );
        } ) ;

        $('.edit-btn').click(function(){
            alert($(this).attr('data-id')); 
        });
        $('.filter-obj-option a').click(function(){
            $('.filter-obj').text($(this).attr('value'));
            $('.filter-obj').attr('value',$(this).attr('value'));
            table.draw();
        });
    });

   


</script>

    @endsection
