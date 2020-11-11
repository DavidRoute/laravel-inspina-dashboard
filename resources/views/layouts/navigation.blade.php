<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                   <a href="{{ route('dashboard') }}"><img src="{{asset('')}}img/logo_nexpg.png" width="130px" alt="image"></a>
                </div>
            </li>

            <li class="dashboard">
                <a href="{{ route('dashboard') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            
            @if(App\User::isAdmin())
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Nexpg Users</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> User Lists</a></li>
                        <li><a href="{{ route('users.create') }}"><i class="fa fa-user"></i> Create New User</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Clients</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ route('clients.create') }}"><i class="fa fa-user"></i>Create New Client</a></li>
                        <li><a href="{{ route('clients.pending') }}"><i class="fa fa-user"></i> Pending Client Lists</a></li>
                        <li><a href="{{ route('clients.approved') }}"><i class="fa fa-user"></i> Approved Client Lists</a></li>
                    </ul>
                </li>
            @endif 
            
            @if(App\User::isAdmin() || App\User::isOperationLeader() || App\User::isOperator() )
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Applications</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('app-categories.index') }}">
                                <i class="fa fa-folder-open-o"></i>App Category Lists
                            </a>
                        </li>
                        <li><a href="{{ route('apps.index') }}"><i class="fa fa-folder-open-o"></i>App Lists</a></li>
                    </ul>
                </li>
            @endif

            @if(App\User::isAdmin() || App\User::isFinance() )
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Discount Rates</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ route('company-discount-rates.index') }}"><i class="fa fa-credit-card"></i> CDR Lists</a></li>
                        <li><a href="{{ route('company-discount-rates.create') }}"><i class="fa fa-credit-card"></i> Create New CDR</a></li>
                    </ul>
                </li>
            @endif

            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Transaction Management</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('client-transactions.index') }}"><i class="fa fa-folder"></i>Client Transactions</a></li>
                    <li><a href="{{ route('supplier-transactions.index') }}"><i class="fa fa-folder"></i>Supplier Transactions</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Withdraw Management</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('create-withdraws.list') }}"><i class="fa fa-folder"></i>Create Withdraws</a></li>
                    <li><a href="{{ route('amount-check-approved.list') }}"><i class="fa fa-folder"></i>Amount Check Approved</a></li>
                    <li><a href="{{ route('payment-transfer-approved.list') }}"><i class="fa fa-folder"></i>Payment Transfer Approved</a></li>
                    <li><a href="{{ route('success-withdraws.list') }}"><i class="fa fa-folder"></i>Successful Withdraws</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Payment Config</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('payment-configs.index') }}"><i class="fa fa-money"></i>PC Listing</a></li>
                    <li><a href="{{ route('payment-configs.create') }}"><i class="fa fa-money"></i>Create New PC</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Issue Trackers</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('issues.open') }}"><i class="fa fa-folder-open-o"></i>Open Issues</a></li>
                    <li><a href="{{ route('issues.closed') }}"><i class="fa fa-times-circle-o"></i>Closed Issues</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</nav>