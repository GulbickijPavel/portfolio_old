 
        <section class="jumbotron" id="skills"> 
            <h2>{translation langEn="Skills"}
                {if ($is_admin)}
                <a class="btn btn-primary right control" id="skil-button">{translation langEn="Control"}</a>
                {/if}
            </h2>
            <hr>
            <div class="content">
                <h3>{translation langEn="Main"}</h3>
                {skills cat=1}
                <h3>{translation langEn="Secondary"}</h3>
                {skills cat=2}
                <h3>{translation langEn="Other"}</h3>
                {skills cat=3}
            </div> 
        </section>