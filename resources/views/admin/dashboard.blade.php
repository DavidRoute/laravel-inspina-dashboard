<x-app-layout title="Dashboard">
	<x-slot name="heading">
        <div class="col-lg-10">
            <h2>{{ __('Dashboard') }}</h2>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-primary float-right">number</span>
                    </div>
                    <h5>Total Master Agents</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">0</h1>
                    <small>Master Agent</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-primary float-right">number</span>
                    </div>
                    <h5>Total Agents</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">0</h1>
                    <small>Agent</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-primary float-right">number</span>
                    </div>
                    <h5>Total Players</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">0</h1>
                    <small>Player</small>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
</x-app-layout>