---
title: Preparing a Github project for version control of improvements and bugfixes to the Cacti Grav theme
date: 13:43 20-07-2018
headline: Forking the project, updating to last published version and preparing a custom development branch.
taxonomy:
    category: blog
    tag: [grav, skeleton, cacti, theme, development, troubleshooting, git, github, commit, repository, version control]
---

Being able to do version control easily is one of the most compelling advantages of using a flat-file CMS, so I decided to use Grav to be able to keep good version control of my website.

I wanted to make this blog multilingual English/Spanish, so I tested the MultiLang skeleton package and realized that I would want to make some changes the theme included with it (Cacti). There were a few bugs in the included theme that I wanted to resolve and I also envisioned that the Language Switcher could be improved for a better experience.

To create a project repository for my website's customisations to the theme, I started by forking the [GitHub project for the Cacti Theme](https://github.com/getgrav/grav-theme-cacti). I then cloned the repo in my local Linux PC with git CLI.

>~$ `git clone https://github.com/drconopoima/grav-theme-cacti`

Since the date of the last commit in the official project (August 2016) was before the date of the last update of the [MultiLang Skeleton package (July 2018)](https://getgrav.org/downloads/skeletons), I decided to check if there were changes applied to the Cacti theme used in the skeleton package compared to the last commit at the Github project. I used the diff Linux command to compare and find out:

>~$ `diff -r ./grav-theme-cacti ./grav-skeleton-multilang-site/user/themes/cacti/ | grep ./grav-theme-cacti/ | awk '{print $4}' > differences.txt`

The output was the list of files that had been updated in the theme compared to the last version in GitHub.

On a side note, after retrieving which files were different, I reviewed them side by side by using the Atom text editor with the useful plugin [split diff](https://atom.io/packages/split-diff) that highlights the differences and lets you cycle through them.

To streamline the latest official modifications as they came from GetGrav.org skeleton, I first applied these modifications locally and proceeded to commit these files to the **develop** branch in my Github fork:

> ~$ `git init`
> <br>~$ `git branch` // Checks the active branch. The output should indicate all branches, with {c:blue}&ast;develop{/c} highlighted as active
> <br>~$ `git checkout develop` // if develop isn't the active branch

Then, I applied the changes that were found by using diff (which are in the list below). To add the edited files for a commit:

> ~$ `git add` `css/style.css`
> <br>`languages.yaml`
> <br>`templates/partials/base.html.twig`
> <br>`templates/partials/disqus.html.twig`
> <br>`templates/post.html.twig`

Alternatively, you could use this command to add all files in the repository:

> ~$ `git add .`

You can check that it recognized that the files were edited by using the following command:

> ~$ `git status`

The output should list the files that were changed and confirm being in the development branch.

To commit the changes:

> ~$ `git commit -m "Theme official updates up to July 2018`

To push the changes to the repository:

> ~$ `git push`

I proceeded to merge the development and master branches. It's a good practice to start by merging the master branch into the development branch, to be able to identify and resolve any issues that may arise. Afterwards, it's safe to merge development into master. Doing it this way ensures a clean master branch.

> <br>~$ `git merge master` // merge master into develop
> <br>~$ `git checkout master` // change to the master branch
> <br>~$ `git merge develop` // merge develop into master

Then I created a new custom branch for the bugfixes that I wanted to make:

> ~$ `git branch themebugfixes`

And switched into the custom branch.

> ~$ `git checkout themebugfixes`

After creating the new local branch, I pushed it as a new branch to the Github repo:

> ~$ `git push origin themebugfixes`

I am going to end this article here for it to serve as a guide on version control and I'll create separate articles for the bugfixes and improvements that I've implemented to the theme.
