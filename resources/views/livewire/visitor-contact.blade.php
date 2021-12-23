<div class="container py-4">

    <div class="row pt-4 pb-1">
        <div class="col-md-12 iconBack">
            <a href="{{ url('/') }}">
                <img src="{{ url('img/m_icon_pink.png') }}">
            </a>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">

            <div class="row text-center contactTitle py-2">
                <p>Let's Make Something Great!</p>
            </div>

            <div class="row text-center contactContents">
            <p>Got a project or proposal to discuss?<br>
            Want to hire me?<br>
            Or just want to say "Hi!". Feel free to reach out.</p>            
            </div>
        </div>
    </div>

    <section class="pt-3 pb-5">
        <div class="container pt-2 pb-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card-body">
                        <form wire:submit.prevent="saveMessage">
                            <div class="row pb-4">
                                <div class="col-md-6 form-group">
                                    <label for="name" class="py-2 labelName">Your Name</label>
                                    <input wire:model="name" type="text" name="name" placeholder="What's your name?" class="form-control py-3"/>
                                    @error('name')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="email" class="py-2 labelName">Your Email Address</label>
                                    <input wire:model="email" type="email" name="email" placeholder="What's your email?" class="form-control py-3"/>
                                    @error('email')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="message" class="py-2 labelName">Message</label>
                                <textarea wire:model="message" rows="4" cols="50" name="message" class="form-control py-2"></textarea>
                                @error('message')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="btn-send">
                                <button type="submit" onClick="refreshPage()" class="btn btn-outline-primary">Send Message</button>
                                <!-- <button type="submit" class="btn btn-outline-primary">Send Message</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>        
</div>

<script>
	function refreshPage(){
		window.location.reload();
	}
</script>