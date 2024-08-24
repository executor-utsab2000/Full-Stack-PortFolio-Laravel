<style>
    .progressTitle {
        font-weight: 700;
        font-size: 0.8rem;
        margin-bottom: 0.3rem;
    }

    .progress {
        box-shadow: rgba(0, 0, 0, 0.5) 0px 5px 15px;
        border-radius: 10px; 
        height: 25px;
        padding: 5px;
        background-color: #e3f2fd;
    }
    
    .progress-bar {
        border-radius: 10px; 
        background-color: #42a5f5;
        font-weight: 800;
        letter-spacing: 1px;
    }
</style>


<div class="mt-4 mb-1">
    <div class="progressTitle">{{ $languageName }}</div>
    <div class="progress" role="progressbar">
        <div class="progress-bar" style="width: {{ $progressPercentage }}%">{{ $progressPercentage }}%</div>
    </div>
</div>
