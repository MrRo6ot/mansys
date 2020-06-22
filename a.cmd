@ECHO OFF

doskey pa=php artisan $*
doskey pas=php artisan serve $*
doskey pas80=php artisan serve --port=80 $*
doskey pasl=php artisan storage:link $*
doskey pacc=php artisan cache:clear $*
doskey pacoc=php artisan config:clear $*
doskey pads=php artisan db:seed $*
doskey pai=php artisan inspire $*
doskey pam=php artisan migrate $*
doskey pamc=php artisan make:controller $*
doskey pamco=php artisan make:component $*
doskey pame=php artisan make:event $*
doskey paml=php artisan make:listener $*
doskey pamm=php artisan make:model $*
doskey pammi=php artisan make:middleware $*
doskey pamr=php artisan migrate:fresh $*
doskey pamrs=php artisan migrate:fresh --seed $*
doskey pams=php artisan migrate --seed $*
doskey parl=php artisan route:list $*
doskey pavc=php artisan view:clear $*
doskey parc=php artisan route:clear $*
doskey paoc=php artisan optimize:clear $*
