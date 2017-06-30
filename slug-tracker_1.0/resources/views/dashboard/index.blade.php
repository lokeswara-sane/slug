@extends('base')
@section('title','Dashboard')
@section('content')
<div class="ui pointing menu ui horizontal inverted" style="border-radius: 0px;background-color: #125688">
    <a class="item sidebar-menu">
        <i class="options icon"></i>
    </a>
    <a class="item">Projects</a>
    <a class="item">Items</a>
    <a class="item">Projects</a>
    <a class="item tiny">
        <button class="ui button  green" id='create-issue'>
            Create
        </button>
    </a>

    <div class="ui right menu inverted">
        <div class="ui dropdown item settings-menu">
            <i class="settings icon"></i> <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item"><i class="users icon"></i> Profile</a>
                <a class="item"><i class="log out icon"></i>Logout</a>
            </div>
        </div>
    </div>
</div> 
<div class="ui left vertical inverted sidebar labeled icon menu" style="background-color: #15273f">
    <a class="item orange">
        <i class="tasks icon"></i>
        Backlog
    </a>
    <a class="item">
        <i class="Checked Calendar icon"></i>
        Releases
    </a>
    <a class="item">
        <i class="Bar Chart icon"></i>
        Reports
    </a>
    <a class="item">
        <i class="search icon"></i>
        Issues
    </a>
    <a class="item">
        <i class="add user icon"></i>
        Invite team
    </a>
</div>
<!--<div class="ui breadcrumb" style="margin-left: 1%">
    <a class="section">Home</a>
    <i class="right angle icon divider"></i>
    <a class="section">Store</a>
    <i class="right angle icon divider"></i>
    <div class="active section">T-Shirt</div>
</div>-->
<div class="ui grid equal width fluid">
    <div class="row">
        <div class="six wide column">
            <div class="ui container">
                <div class="ui grid">
                    <div class="seven wide column">


                        <!--Profile avatar info-->
                        <div class="ui card" style="margin-left: 5%">
                            <div class="image">
                                <img src="/images/man2.png" width="50">
                            </div>
                            <div class="content">
                                <a class="header">Captain America</a>
                                <div class="meta">
                                    <span class="date">Joined in 2013</span>
                                </div>
                                <div class="description">
                                    Captain America works with Avengers team.
                                </div>
                            </div>
                            <div class="extra content">
                                <a class="ui red circular label pending-issue" data-content="Issues remaining"> 2</a> 
                                <a class="ui green circular label">6</a>
                            </div>
                        </div>

                        <!--End Profile avatar info-->

                        <!--Vertical Menu for User-->
                        <div class="ui vertical menu fluid" style="margin-left: 5%">
                            <div class="item">
                                Quick Navigation
                                <i class="Marker icon floated right small" style="font-size: 1.2em"></i>
                            </div>
                            <a class="active teal item">
                                Bugs
                                <div class="ui teal left pointing label">1</div>
                            </a>
                            <a class="item">
                                Tasks
                                <div class="ui label">51</div>
                            </a>
                            <a class="item">
                                Stories
                                <div class="ui label">1</div>
                            </a>
                            <a class="item">
                                Epics
                                <div class="ui label">0</div>
                            </a>
                        </div>
                        <!--End of Vertical Menu for User-->

                    </div>

                    <div class="nine wide column">
                        <!--Comments and bug section-->
                        <div class="ui card fluid">
                            <div class="content">
                                <h2 class="ui header">
                                    <i class="bug icon"></i>
                                    <div class="content">
                                        My Issues
                                        <div class="sub header floated right">View all</div>
                                    </div>
                                </h2>
                                <div class="ui relaxed list mini">
                                    <div class="list" ng-repeat="test in [1, 2, 3, 4]">
                                        <div class="ui card fluid">
                                            <div class="content">
                                                <span class="right floated unhide">
                                                    <i class="unhide icon"></i>
                                                    Watch
                                                </span>
                                                <div class="header">
                                                    <a href="#">SLUG-00@{{test}} This is a test-@{{test}} issue to display</a>
                                                </div>
                                                <div class="description">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="extra content">
                                                <a target="_self"><span class="right floated comments" style="margin-right:1%" data-index='@{{test}}' id="comments-section">
                                                        <i class="comments icon"></i>
                                                        View Comments
                                                    </span></a>
                                                <span class="left floated calendar">
                                                    <i class="calendar icon"></i>
                                                    Last Activity  Mar 25 2015
                                                </span>
                                            </div>
                                            <div class='content scrollbar comment-section-@{{test}} transition hidden' style="max-height: 300px;overflow: auto" id="style-5">
                                                <div class="ui segment" style="height: 250px;" ng-if="isActive">
                                                    <div class="ui active dimmer">
                                                        <div class="ui text loader">Loading</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                                <div class="ui comments">
                                                    <div class="comment" ng-repeat="test in [1, 2, 3, 4, 5, 6]">
                                                        <a class="avatar">
                                                            <img src="./images/test.jpg">
                                                        </a>
                                                        <div class="content">
                                                            <a class="author">Lokeswara Sane</a>
                                                            <div class="metadata">
                                                                <div class="date">2 days ago</div>
                                                                <div class="rating">
                                                                    <i class="star icon"></i>
                                                                    5 Faves
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                Hey guys, I hope this example comment is helping you read this documentation.
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Comments and bug section-->
                    </div>
                </div>
            </div>
        </div>
        <div class="nine wide column">
            <issue-description issue="@{{""}}"/>
        </div>
    </div>

    @include('modals.modal')
    @endsection
    @push('javascript')
    {{ Html::script('js/angular-app/dashboard/dashBoardController.js') }}
    @endpush