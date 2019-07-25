@extends('layout/master')

@section('title', 'Yuuko / Commands')

@section('content')

<div class="row vote-col">
    <div class="card mb-2 m-1 bg-dark col">
        <h6 class="card-header text-center">discordbots.org</h6>
        <div class="card-body">
            <p class="card-text dimmed-text">The first bot list that Yuuko was added to a month after creation in 2018, with a link to their website <a href="https://discordbots.org">here</a>.</p>
            <a href="https://discordbots.org/bot/420682957007880223/vote" target="_blank" rel="noopener" class="btn btn-primary btn-block">Vote</a>
        </div>
    </div>
    <div class="card mb-2 m-1 bg-dark col">
        <h6 class="card-header text-center">discordbotlist.com</h6>
        <div class="card-body">
            <p class="card-text dimmed-text">The second bot list that Yuuko was added to some time in January 2019, with a link to their website <a href="https://discordbotlist.com">here</a>.</p>
            <a href="https://discordbotlist.com/bots/420682957007880223/upvote" target="_blank" rel="noopener" class="btn btn-primary btn-block">Vote</a>
        </div>
    </div>
    <div class="card mb-2 m-1 bg-dark col">
        <h6 class="card-header text-center">divinediscordbots.com</h6>
        <div class="card-body">
            <p class="card-text dimmed-text">The latest bot list that Yuuko has been added to in late January 2019, with a link to their website <a href="https://divinediscordbots.com">here</a>.</p>
            <a href="https://divinediscordbots.com/bot/420682957007880223/vote" target="_blank" rel="noopener" class="btn btn-primary btn-block">Vote</a>
        </div>
    </div>
</div>

<div id="commands">

    <div class="nav bg-dark justify-center" role="tablist">
        <a class="nav-item nav-link" id="command-animal-tab" data-toggle="tab" href="#command-animal" role="tab" aria-controls="command-animal" aria-selected="false">Animal <span id="command-animal-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-audio-tab" data-toggle="tab" href="#command-audio" role="tab" aria-controls="command-audio" aria-selected="false">Audio <span id="command-audio-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link active" id="command-core-tab" data-toggle="tab" href="#command-core" role="tab" aria-controls="command-home" aria-selected="true">Core <span id="command-core-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-fun-tab" data-toggle="tab" href="#command-fun" role="tab" aria-controls="command-fun" aria-selected="false">Fun <span id="command-fun-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-interaction-tab" data-toggle="tab" href="#command-interaction" role="tab" aria-controls="command-interaction" aria-selected="false">Interaction <span id="command-interaction-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-media-tab" data-toggle="tab" href="#command-media" role="tab" aria-controls="command-media" aria-selected="false">Media <span id="command-media-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-moderation-tab" data-toggle="tab" href="#command-moderation" role="tab" aria-controls="command-moderation" aria-selected="false">Moderation <span id="command-moderation-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-nsfw-tab" data-toggle="tab" href="#command-nsfw" role="tab" aria-controls="command-nsfw" aria-selected="false">NSFW <span id="command-nsfw-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-utility-tab" data-toggle="tab" href="#command-utility" role="tab" aria-controls="command-utility" aria-selected="false">Utility <span id="command-utility-count" class="badge badge-secondary">0</span></a>
        <a class="nav-item nav-link" id="command-settings-tab" data-toggle="tab" href="#command-settings" role="tab" aria-controls="command-settings" aria-selected="false">Settings <span id="command-settings-count" class="badge badge-secondary">0</span></a>
    </div>

    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show" id="command-animal" role="tabpanel" aria-labelledby="command-animal-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>cat</td>
                    <td>Displays a random image of a cat!</td>
                    <td>-cat</td>
                    <td><code>-cat</code></td>
                </tr>

                <tr>
                    <td>fox</td>
                    <td>Displays a random image of a fox!</td>
                    <td>-fox</td>
                    <td><code>-fox</code></td>
                </tr>

                <tr>
                    <td>dog</td>
                    <td>Displays a random image of a dog!</td>
                    <td>-dog</td>
                    <td><code>-dog</code></td>
                </tr>

                <tr>
                    <td>bird</td>
                    <td>Displays a random image of a bird!</td>
                    <td>-bird</td>
                    <td><code>-bird</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-audio" role="tabpanel" aria-labelledby="command-audio-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>play</td>
                    <td>Starts playback of the given audio track through either URL or search term. Will ask Yuuko to join the voice channel of the command issuer and if a track is already playing, queue it instead. Using the command without arguments will resume a paused player.</td>
                    <td>-play, -play [url], -play [term]</td>
                    <td><code>-play https://www.youtube.com/watch?v=DDW4hTWbRYs</code>, <code>-play something</code></td>
                </tr>

                <tr>
                    <td>pause</td>
                    <td>Pauses playback of the current track.</td>
                    <td>-pause</td>
                    <td><code>-pause</code></td>
                </tr>

                <tr>
                    <td>stop</td>
                    <td>Stops playback, clearing the queue and removing the background track.</td>
                    <td>-stop</td>
                    <td><code>-stop</code></td>
                </tr>

                <tr>
                    <td>skip</td>
                    <td>Skips the currently playing track, if there is one.</td>
                    <td>-skip</td>
                    <td><code>-skip</code></td>
                </tr>

                <tr>
                    <td>shuffle</td>
                    <td>Shuffles the queue.</td>
                    <td>-shuffle</td>
                    <td><code>-shuffle</code></td>
                </tr>

                <tr>
                    <td>current</td>
                    <td>Returns information about the currently playing track such as current time, artist and source.</td>
                    <td>-current</td>
                    <td><code>-current</code></td>
                </tr>

                <tr>
                    <td>last</td>
                    <td>Returns information about the last played track such as artist and source.</td>
                    <td>-last</td>
                    <td><code>-last</code></td>
                </tr>

                <tr>
                    <td>queue</td>
                    <td>Returns the first 10 tracks in the queue or however many there are if under 10.</td>
                    <td>-queue</td>
                    <td><code>-queue</code></td>
                </tr>

                <tr>
                    <td>clear</td>
                    <td>Clears the current queue of all of the current tracks, or clears a single track from the given position in the queue.</td>
                    <td>-clear, -clear [position]</td>
                    <td><code>-clear</code>, <code>-clear 4</code></td>
                </tr>

                <tr>
                    <td>background</td>
                    <td>Sets the background track and starts playback. Background tracks will play if there is nothing in queue and queued tracks will play instead of the background track. Use the command with no parameters to unset a set background.</td>
                    <td>-background [url], -background [term]</td>
                    <td><code>-background https://www.youtube.com/watch?v=va3Dj_sUCJs</code>, <code>-background cool music</code></td>
                </tr>

                <tr>
                    <td>loop</td>
                    <td>Toggles looping of the queue. (Finished tracks will be re-added to the end of the queue)</td>
                    <td>-loop</td>
                    <td><code>-loop</code></td>
                </tr>

                <tr>
                    <td>search</td>
                    <td>Searches YouTube and returns the first 10 results, a choice is made by typing the number and the selected track will be queued.</td>
                    <td>-search [term], -search [value], -search cancel</td>
                    <td><code>-search funky beats</code></td>
                </tr>

                <tr>
                    <td>seek</td>
                    <td>Allows seeking of currently playing tracks with an accuracy of seconds using either timestamp of seek time in seconds.</td>
                    <td>-seek [seconds], -seek [timestamp]</td>
                    <td><code>-seek 180</code>, <code>-seek 3:00</code></td>
                </tr>

                <tr>
                    <td>lyrics</td>
                    <td>Returns the lyrics to a song, or the first song by an artist.</td>
                    <td>-lyrics [song|artist]</td>
                    <td><code>-lyrics she wolf</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show active" id="command-core" role="tabpanel" aria-labelledby="command-core-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>module <span class="badge badge-danger">MANAGE_SERVER</span></td>
                    <td>Toggles a module on or off based on it’s current value. If no parameters given, lists the state of each module.</td>
                    <td>-module, -module [module]</td>
                    <td><code>-module</code>, <code>-module audio</code></td>
                </tr>

                <tr>
                    <td>command <span class="badge badge-danger">MANAGE_SERVER</span></td>
                    <td>Allows the toggling of commands either globally or in individual channels.</td>
                    <td>-command [command] | #channel</td>
                    <td><code>-command ping</code>, <code>-command ping #general</code>, <code>-command * #general</code></td>
                </tr>

                <tr>
                    <td>help</td>
                    <td>Sends a private message to the user with a link to the GitHub repository where this list is located, or sends usage information about the given command.</td>
                    <td>-help, -help [command]</td>
                    <td><code>-help</code>, <code>-help play</code></td>
                </tr>

                <tr>
                    <td>about</td>
                    <td>Returns some technical information about Yuuko, such as uptime, ping and server count.</td>
                    <td>-about</td>
                    <td><code>-about</code></td>
                </tr>

                <tr>
                    <td>settings <span class="badge badge-danger">MANAGE_SERVER</span></td>
                    <td>Gives the ability to display or set a variety of server settings.</td>
                    <td>-settings | [setting] [value]</td>
                    <td><code>-settings</code>, <code>-settings deleteExecuted true</code></td>
                </tr>

                <tr>
                    <td>shards</td>
                    <td>Returns some information about all of the bot’s current shards.</td>
                    <td>-shards</td>
                    <td><code>-shards</code></td>
                </tr>

                <tr>
                    <td>advertise</td>
                    <td>Sets or removes the invite link for a server. Use this command if you want to advertise your discord server on the home page.</td>
                    <td>-advertise, -advertise stop</td>
                    <td><code>-advertise</code>, <code>-advertise stop</code></td>
                </tr>

                <tr>
                    <td>permissions</td>
                    <td>Displays both which permissions to bot current has, besides which the bot needs to fully function.</td>
                    <td>-permissions</td>
                    <td><code>-permissions</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-fun" role="tabpanel" aria-labelledby="command-fun-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>roll</td>
                    <td>Rolls a die with the given value and returns the result. Rolling <code>00</code> will return a multiple of 10 between <code>0</code> and <code>100</code>.</td>
                    <td>-roll [value], -roll 00</td>
                    <td><code>-roll 42</code></td>
                </tr>

                <tr>
                    <td>choose</td>
                    <td>Takes a list of options, separated by a comma and returns an option at random.</td>
                    <td>-choose [choice], [choice]…</td>
                    <td><code>-choose sweet, savoury</code></td>
                </tr>

                <tr>
                    <td>spoilerify</td>
                    <td>Takes a string and turns it into an 'every character' spoiler. Adding a backtick to the start of the string will definitely break the intended output.</td>
                    <td>-spoilerify [string]</td>
                    <td><code>-spoilerify according to all known laws of aviation...</code></td>
                </tr>

                <tr>
                    <td>8ball</td>
                    <td>Input a question and get an original 8ball response.</td>
                    <td>-8ball [question]</td>
                    <td><code>-8ball Am I forever alone?</code></td>
                </tr>

                <tr>
                    <td>flip</td>
                    <td>Returns either heads, tails or in very, vary rare occurrences, edge.</td>
                    <td>-flip</td>
                    <td><code>-flip</code></td>
                </tr>

                <tr>
                    <td>advice</td>
                    <td>Returns a \good\ piece of advice.</td>
                    <td>-advice</td>
                    <td><code>-advice</code></td>
                </tr>

                <tr>
                    <td>joke</td>
                    <td>Returns a random crappy dad joke.</td>
                    <td>-joke, -joke [term]</td>
                    <td><code>-joke</code>, <code>-joke ass</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-interaction" role="tabpanel" aria-labelledby="command-interaction-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>poke</td>
                    <td>Pokes the tagged user.</td>
                    <td>-poke @user</td>
                    <td><code>-poke @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>bite</td>
                    <td>Bites the tagged user.</td>
                    <td>-bite @user</td>
                    <td><code>-bite @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>hug</td>
                    <td>Hugs the tagged user.</td>
                    <td>-hug @user</td>
                    <td><code>-hug @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>attack</td>
                    <td>Attacks the tagged user.</td>
                    <td>-attack @user</td>
                    <td><code>-attack @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>angry</td>
                    <td>Displays that you are angry, or angry at the tagged user.</td>
                    <td>-angry, -angry @user</td>
                    <td><code>-angry</code>, <code>-angry @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>cry</td>
                    <td>Displays that you are crying.</td>
                    <td>-cry</td>
                    <td><code>-cry</code></td>
                </tr>

                <tr>
                    <td>laugh</td>
                    <td>Displays that you are laughing, or laughing at the tagged user.</td>
                    <td>-laugh, -laugh @user</td>
                    <td><code>-laugh</code>, <code>laugh @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>pout</td>
                    <td>Displays that you are pouting, or pouts at the tagged user.</td>
                    <td>-pout, -pout @user</td>
                    <td><code>-pout</code>, <code>-pout @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>shrug</td>
                    <td>Displays that you are shrugging, or shrugs at the tagged user.</td>
                    <td>-shrug, -shrug @user</td>
                    <td><code>-shrug</code>, <code>-shrug @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>sleep</td>
                    <td>Displays that you are sleeping.</td>
                    <td>-sleep</td>
                    <td><code>-sleep</code></td>
                </tr>

                <tr>
                    <td>tickle</td>
                    <td>Tickles the tagged user.</td>
                    <td>-tickle @user</td>
                    <td><code>-tickle @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>kiss</td>
                    <td>Kisses the tagged user.</td>
                    <td>-kiss @user</td>
                    <td><code>-kiss @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>pet</td>
                    <td>Pets the tagged user.</td>
                    <td>-pet @user</td>
                    <td><code>-pet @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>blush</td>
                    <td>Displays that you are blushing.</td>
                    <td>-blush</td>
                    <td><code>-blush</code></td>
                </tr>

                <tr>
                    <td>pat</td>
                    <td>Pats the tagged user on the head.</td>
                    <td>-pat @user</td>
                    <td><code>-pat @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>kill</td>
                    <td>Kills the tagged user.</td>
                    <td>-kill @user</td>
                    <td><code>-kill @Yuuko#2525</code></td>
                </tr>

                <tr>
                    <td>dance</td>
                    <td>Displays that you are dancing alone or with the tagged user.</td>
                    <td>-dance, -dance @user</td>
                    <td><code>-dance</code>, <code>-dance @Yuuko#2525</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-media" role="tabpanel" aria-labelledby="command-media-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>osu</td>
                    <td>Returns information about an osu! player on a specified mode. (Modes: 0 = Osu, 1 = Taiko, 2 = CtB, 3 = Mania)</td>
                    <td>-osu [username], -osu [username] [mode]</td>
                    <td><code>-osu galaxiosaurus</code>, <code>-osu galaxiosaurus 3</code></td>
                </tr>

                <tr>
                    <td>kitsu</td>
                    <td>Returns information about the given anime. (Types: show) (Character information to come soon!)</td>
                    <td>-kitsu [name]</td>
                    <td><code>-kitsu naruto</code></td>
                </tr>

                <tr>
                    <td>github</td>
                    <td>Returns information about a GitHub repository. (If demand for it arrises, I will add the abililty to list repositories by user)</td>
                    <td>-github [user|organization] [repository]</td>
                    <td><code>-github torvalds linux</code></td>
                </tr>

                <tr>
                    <td>underground</td>
                    <td>Returns full line coverage for the London Underground which is accurate to command execution, with optional <code>min</code> argument to return a minified version.</td>
                    <td>-underground, -underground [min]</td>
                    <td><code>-underground</code>, <code>-underground min</code></td>
                </tr>

                <tr>
                    <td>weather</td>
                    <td>Allows you to look up the weather in the given city <em>Note: Currently limited to a city name, without country code.</em></td>
                    <td>-weather [city]</td>
                    <td><code>-weather London</code></td>
                </tr>

                <tr>
                    <td>tesco</td>
                    <td>Returns product information about any item sold by Tesco PLC</td>
                    <td>-tesco [product]</td>
                    <td><code>-tesco mount gay</code></td>
                </tr>

                <tr>
                    <td>natgeo</td>
                    <td>Returns the top 10 headlines from National Geographic via NewsAPI.</td>
                    <td>-natgeo</td>
                    <td><code>-natgeo</code></td>
                </tr>

                <tr>
                    <td>petition</td>
                    <td>Returns a petition from <code>petition.parliament.uk</code> via an input ID.</td>
                    <td>-petition, -petition [id]</td>
                    <td><code>-petition</code>, <code>-petition 241584</code></td>
                </tr>

                <tr>
                    <td>urban</td>
                    <td>Returns the definition of a word and examples from Urban Dictionary.</td>
                    <td>-urban [term]</td>
                    <td><code>-urban ur mum</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-moderation" role="tabpanel" aria-labelledby="command-moderation-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>kick <span class="badge badge-danger">KICK_MEMBERS</span></td>
                    <td>Kicks the provided user from, with an optional reason.</td>
                    <td>-kick @user, -kick @user [reason]</td>
                    <td><code>-kick @Yuuko</code>, <code>-kick @Yuuko not very nice.</code></td>
                </tr>

                <tr>
                    <td>ban <span class="badge badge-danger">BAN_MEMBERS</span></td>
                    <td>Bans the provided user, with an option to nuke all of their messages from the past 1-7 days, and optional reason. To unban a user, use the command on them once again. (using the long ID)</td>
                    <td>-ban @user | [delDays] | [reason]</td>
                    <td><code>-ban @Yuuko</code>, <code>-ban @Yuuko 4</code>, <code>-ban @Yuuko butthead</code>, <code>-ban @Yuuko 5 butthead</code></td>
                </tr>

                <tr>
                    <td>mute <span class="badge badge-danger">MUTE_MEMBERS</span></td>
                    <td>Mutes the provided user from both voice and text chat on the server, with an optional reason. To unmute a user you can either use the command on them again or manually remove the <code>Muted</code> role.</td>
                    <td>-mute @user, -mute @user [reason]</td>
                    <td><code>-mute @Yuuko</code>, <code>-mute @Yuuko test reason</code></td>
                </tr>

                <tr>
                    <td>nuke <span class="badge badge-danger">MESSAGE_MANAGE</span> <span class="badge badge-danger">MANAGE_CHANNEL</span></td>
                    <td>Deletes the provided number of messages from a text channel <strong>OR</strong> if tagged, the whole channel. Max Channels <code>10</code>, Max messages <code>100</code>. (Warning: Nuking via #channel will break any bindings you have created!)</td>
                    <td>-nuke [value], -nuke #channel</td>
                    <td><code>-nuke 50</code>, <code>-nuke #nsfw</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-nsfw" role="tabpanel" aria-labelledby="command-nsfw-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>efukt</td>
                    <td>Returns a random image/gif/video from eFukt.</td>
                    <td>-efukt</td>
                    <td><code>-efukt</code></td>
                </tr>

                <tr>
                    <td>neko</td>
                    <td>Returns a random lewd neko image by default or another type with a given parameter</td>
                    <td>-neko, -neko [type]</td>
                    <td><code>-neko</code>, <code>-neko boobs</code></td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-utility" role="tabpanel" aria-labelledby="command-utility-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>Usage</th>
                    <th>Example</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>user</td>
                    <td>Returns information about the provided user, such as join date, online status and roles.</td>
                    <td>-user @user</td>
                    <td><code>-user @Yuuko</code></td>
                </tr>

                <tr>
                    <td>guild</td>
                    <td>Returns information about the current guild.</td>
                    <td>-guild</td>
                    <td><code>-server</code></td>
                </tr>

                <tr>
                    <td>channel <span class="badge badge-danger">MANAGE_CHANNELS</span></td>
                    <td>Adds or removes a channel to/from the server. <em>Note: You cannot have NSFW voice channels, even if you tried.</em></td>
                    <td>-channel [action] [type] [name] | [nsfw]</td>
                    <td><code>-channel add text cool-text-channel nsfw</code></td>
                </tr>

                <tr>
                    <td>bind <span class="badge badge-danger">MANAGE_SERVER</span></td>
                    <td>Binds a module to a text channel preventing commands from being executed outside of that channel. Modules can be bound to multiple channels and unbound by retyping the command. (A toggle) No parameters will return a list of bound channels.</td>
                    <td>-bind [module] | #channel…</td>
                    <td><code>-bind audio</code>, <code>-bind audio #test-channel...</code></td>
                </tr>

                <tr>
                    <td>avatar</td>
                    <td>Displays the 256x256 avatar image of a given user.</td>
                    <td>-avatar @user</td>
                    <td><code>-avatar @user</code></td>
                </tr>

                <tr>
                    <td>roles</td>
                    <td>Displays a list of the guild's roles and also what colour they are.</td>
                    <td>-roles</td>
                    <td><code>-roles</code></td>
                </tr>

                <tr>
                    <td>ping</td>
                    <td>Displays the bot's current ping, the value is updated once every 10-30 seconds.</td>
                    <td>-ping</td>
                    <td><code>-ping</code></td>
                </tr>

                <tr>
                    <td>reactrole <span class="badge badge-danger">MANAGE_ROLES</span></td>
                    <td>Used to setup reaction roles on messages that users can click to get certain set roles.</td>
                    <td>-reactrole select, -reactrole select [messageId], -reactrole add [:emote:] [@role], -reactrole rem [:emote:]</td>
                    <td><code>-reactrole select</code>, <code>-reactrole select 000000000000000000</code>, <code>-reactrole add :ShinobuOshino: @TestRole</code>, <code>-reactrole rem :ShinobuOshino:</code></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade show" id="command-settings" role="tabpanel" aria-labelledby="command-settings-tab">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Setting</th>
                    <th>Description</th>
                    <th>Values</th>
                    <th>Usage</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>prefix</td>
                    <td>Changes the custom prefix for the server. (Characters: Min <code>1</code>, Max <code>5</code>)</td>
                    <td>String</td>
                    <td><code>-settings prefix !</code></td>
                </tr>

                <tr>
                    <td>deleteExecuted</td>
                    <td>Deletes the command message after it has been executed.</td>
                    <td>TRUE, FALSE</td>
                    <td><code>-settings deleteExecuted true</code></td>
                </tr>

                <tr>
                    <td>nowPlaying</td>
                    <td>Announces the next track in the queue when the previous finishes.</td>
                    <td>TRUE, FALSE</td>
                    <td><code>-settings nowPlaying true</code></td>
                </tr>

                <tr>
                    <td>djMode</td>
                    <td>Toggles whether or not the role of <code>DJ</code> is required to use key audio module commands.</td>
                    <td>TRUE, FALSE</td>
                    <td><code>-settings djMode true</code></td>
                </tr>

                <tr>
                    <td>newMember</td>
                    <td>Channel used to welcome new members, default value of null (off) set by tagging a channel, unset by typing anything else.</td>
                    <td>#channel, null</td>
                    <td><code>-settings newmember #general</code>, <code>-settings newmember null</code></td>
                </tr>

                <tr>
                    <td>starboard</td>
                    <td>Channel used for the starboard, default value of null (off) set by tagging a channel, unset by typing anything else. Use <code>setup</code> to automatically setup the channel.</td>
                    <td>#channel, ‘setup’, null</td>
                    <td><code>-settings starboard #starboard</code>, <code>-settings starboard setup</code></td>
                </tr>

                <tr>
                    <td>comLog</td>
                    <td>Channel used for the command log, default value of null (off) set by tagging a channel, unset by typing anything else. Use <code>setup</code> to automatically setup the channel.</td>
                    <td>#channel, ‘setup’, null</td>
                    <td><code>-settings comLog #commandLog</code>, <code>-settings comLog setup</code></td>
                </tr>

                <tr>
                    <td>modLog</td>
                    <td>Channel used for the moderation log, default value of null (off) set by tagging a channel, unset by typing anything else. Use <code>setup</code> to automatically setup the channel.</td>
                    <td>#channel, ‘setup’, null</td>
                    <td><code>-settings modLog #modLog</code>, <code>-settings modLog setup</code></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
$(document).ready(function() {
    $('#command-core-count').html($('#command-core tbody tr').length);
    $('#command-moderation-count').html($('#command-moderation tbody tr').length);
    $('#command-animal-count').html($('#command-animal tbody tr').length);
    $('#command-audio-count').html($('#command-audio tbody tr').length);
    $('#command-interaction-count').html($('#command-interaction tbody tr').length);
    $('#command-utility-count').html($('#command-utility tbody tr').length);
    $('#command-media-count').html($('#command-media tbody tr').length);
    $('#command-fun-count').html($('#command-fun tbody tr').length);
    $('#command-nsfw-count').html($('#command-nsfw tbody tr').length);
    $('#command-settings-count').html($('#command-settings tbody tr').length);
});
</script>
@endsection
