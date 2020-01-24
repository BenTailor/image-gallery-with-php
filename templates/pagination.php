<nav>
    <ul class="pagination">      
        <li class="page-item <?=$page<=1?"disabled":""?>"><a class="page-link" href="#">Prev</a></li>
        <li class="page-item <?=$page<=2?"disabled":""?>"><a class="page-link" href="?size=<?=$size?>&page=1">1</a></li>
        <li class="page-item <?=$page<=3?"disabled":""?>"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#"><?=$page-1?></a></li>

        <li class="page-item active"><a class="page-link" href="#"><?=$page?></a></li>
            
        <li class="page-item"><a class="page-link" href="?size=<?=$size?>&page=<?=$page+1?>"><?=$page+1?></a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="?size=<?=$size?>&page=<?=$lastPage?>"><?=$lastPage?></a></li>    
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>