<div>
    <h1>Light House</h1>
        <h2>&#128161; {{ $brightness }}%</h2>

    <div class="progress" style="height: 2rem;">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{ $brightness }}%" aria-valuenow="{{ $brightness }}" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="mt-3">
        <button class="btn btn-danger" wire:click="off">Off</button>
   
        <button class="btn btn-secondary" wire:click="plus">+</button>
   
        <button class="btn btn-secondary" wire:click="miness">-</button>
    
        <button class="btn btn-primary" wire:click="on">On</button>
    </div>
</div>
