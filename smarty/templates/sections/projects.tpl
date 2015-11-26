        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2>{translation langEn="Projects"}
                </h2>
                <hr>
                <ul class="bxslider">
                    {foreach from=$projects item=item key=key}
                    <li>
                        <h3> {$item.projectname}</h3>
                        <ul id="proj-inner-slider" class="bxslider inner">
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='/images/projects/high-{$item.image1}'>
                                   <source media="(min-width: 37.5em)" srcset='/images/projects/med-{$item.image1}'>
                                   <source srcset='low-{$item.image1}'>
                                   <img src='/images/projects/med-{$item.image1}' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='/images/projects/high-{$item.image2}'>
                                   <source media="(min-width: 37.5em)" srcset='/images/projects/med-{$item.image2}'>
                                   <source srcset='/images/projects/low-{$item.image2}'>
                                   <img src='/images/projects/med-{$item.image2}' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='/images/projects/high-{$item.image3}'>
                                   <source media="(min-width: 37.5em)" srcset='/images/projects/med-{$item.image3}'>
                                   <source srcset='/images/projects/low-{$item.image3}'>
                                   <img src='/images/projects/med-{$item.image3}' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                        </ul>
                        <article class="experience-desc">
                            {if $lang == 'en'} 
                            {$item.descriptionEn}
                            {/if}
                            {if $lang == 'lt'} 
                            {$item.descriptionLt}
                            {/if}
                            {if $lang == 'ru'} 
                            {$item.descriptionRu}
                            {/if}
                        </article>
                    </li>
                    {/foreach}
                </ul>
            </div>   
        </section>