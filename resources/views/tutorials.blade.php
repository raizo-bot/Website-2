@extends('layout/master')

@section('title', 'Yuuko / Tutorials')

@section('content')
    <div class="card bg-dark">
        <h4 class="card-header">Advertise Server</h4>
        <div class="card-body dimmed-text">
            Advertising your server is a great way to boost numbers and meet new and exciting people.
            Yuuko's advertise feature allows you to do this with other people who also have Yuuko on their server.
            Best of all it's quick and easy to both start and stop advertising on the website as seen below, so why not give it a try!

            <div class="row m-2">
                <img class="col-6" src="/assets/tutorial/advertise/adv-start.png" alt="Advertisement Start Image"/>
                <img class="col-6" src="/assets/tutorial/advertise/adv-stop.png" alt="Advertisement Stop Image"/>
            </div>
        </div>
    </div>

    <br>

    <div class="card bg-dark">
        <h4 class="card-header">Reaction Role</h4>
        <div class="card-body dimmed-text">
            <h5>Select</h5>
            Use <code>-reactrole select</code> to select the message above, or <code>-reactrole select messsageId</code> by giving the message's ID as a parameter.

            <div class="row mt-2 ml-1 mb-4">
                <img class="col-6" src="/assets/tutorial/reactrole/select.png" alt="Reaction Role Select Message"/>
            </div>

            <h5>Add</h5>
            Use <code>-reactrole add :emote: @role</code> to add the specified reaction to the specified role.

            <div class="row mt-2 ml-1 mb-4">
                <img class="col-6" src="/assets/tutorial/reactrole/add.png" alt="Reaction Role Add Reaction"/>
            </div>

            <h5>Remove</h5>
            Use <code>-reactrole rem :emote:</code> to remove the reaction corresponding to the given emote.

            <div class="row ml-1 mt-2">
                <img class="col-6" src="/assets/tutorial/reactrole/rem.png" alt="Reaction Role Remove Reaction"/>
            </div>
        </div>
    </div>
@endsection
