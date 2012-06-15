<h2>Specials</h2>
<div class="left-box">
    {foreach from=$articles item=a}
    <h3>{$a.title}</h3>
    <p>{$a.bodyplain|truncate:100:"..."}</p>
    <p class="align-right"><a href="{$a.url}">Read More</a><br /></p>
    {/foreach}
</div>