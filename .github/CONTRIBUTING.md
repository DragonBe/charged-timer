# Welcome to Charged Timer contributing guide <!-- omit in toc -->

Thank you for investing your time in contributing to our project! Any contribution you make will be reflected on [Charged Timer] project ✨.

Read our [Code of Conduct] to keep our community approachable and respectable.

In this guide you will get an overview of the contribution workflow from opening an issue, creating a PR, reviewing, and merging the PR.

## New contributor guide

To get an overview of the project, read the [README] file. Here are some resources to help you get started with open source contributions:

- [Finding ways to contribute to open source on GitHub](https://docs.github.com/en/get-started/exploring-projects-on-github/finding-ways-to-contribute-to-open-source-on-github)
- [Set up Git](https://docs.github.com/en/get-started/getting-started-with-git/set-up-git)
- [GitHub flow](https://docs.github.com/en/get-started/using-github/github-flow)
- [Collaborating with pull requests](https://docs.github.com/en/github/collaborating-with-pull-requests)


## Getting started

To better understand the codebase, have a look at [our unit tests](../tests/unit) ✅ to see how the code is being used and how components handle wrong input or invalid arguments.

We have adopted Domain-Driven Design ([DDD]), Test-Driven Development ([TDD]), and Privacy by Design & Default ([GDPR Art. 25]) principles to structure the codebase and provide a meaningful separation of responsibilities. These principles should allow you to understand the objectives we aim with this project.

## Contribute

There are always opportunities to help with this project, even if you have no codings skills.

### Promote 📢

This project will only provide value if people know about it, so promotion of this project is always welcome. If you know someone who is in need of a convenient time tracking and invoicing tool that is implementing [Peppol] electronic invoicing, let them know about the this solution we have created. It's free to use.

### Report issues 🐞

Software is never without flaws, even if it is written by AI. If you stumble on such flaw, let us know. You can do this directly on the project using [GitHub Issues] where you can explain what went wrong, how you got to this failure, and what you think we should do to correct it.

### Report security issues

Even though we have done our best to harden the software and ensure that the code and its dependendt libaries are updated, chances are that we missed somthing important. Please reach out to us privately by submitting a [Security Vulnerability Report]

### Contribute code 💻

Your code contributions are welcome and appreciated. We do ask to keep that you participate with the same mindset as we have done by following the following steps:

1. Write your tests first to design the solution you want to contribute ([TDD])
2. Always ensure privacy is ensured by design and by default ([GDPR Art. 25])
3. Run our default QA tools locally before committing
4. Always commit your changes or additions via a [Pull Request] and if you have worked on an issue, don't forget to include the issue number.

Before we accept a pull request, we review the change and if neccessary we will provide feedback on your proposed changes. This feedback is essential to learn and adopt new changes for both the contributor (you) as for the project maintainer (us).

Once all is clear and you change is accepted, it will be merged in the main branch of the project. Your contributions will be mentioned in the [Changelog] as well in the [Releases] notes.

[Peppol]: https://peppol.org
[DDD]: https://martinfowler.com/bliki/DomainDrivenDesign.html
[TDD]: https://www.agilealliance.org/glossary/tdd/
[GDPR Art. 25]: https://gdpr.eu/article-25-data-protection-by-design/
[Charged Timer]: https://github.com/DragonBe/charged-timer
[README]: ../README.md
[Code of Conduct]: ./CODE_OF_CONDUCT.md
[GitHub Issues]: https://github.com/DragonBe/charged-timer/issues
[Security Vulnerability Report]: https://github.com/DragonBe/charged-timer/security/advisories/new
[Changelog]: ../CHANGELOG.md
[Releases]: https://github.com/DragonBe/charged-timer
[Pull Request]: https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request
