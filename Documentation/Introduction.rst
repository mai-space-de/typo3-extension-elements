.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

**Maispace Elements** provides custom content elements for TYPO3 CMS, enabling
editors to build structured, component-based pages using a predefined set of
element types.

Features
========

Content Elements
----------------

*  **Text elements** — Headline, plain text, HTML, and table content elements
   with Fluid templates optimised for clean semantic markup.

*  **Media elements** — Image, video, and file content elements with
   straightforward rendering.

*  **Fluid layouts** — A shared ``Element.html`` layout ensures consistent
   wrapper markup across all content elements.

Site Sets
---------

*  Ships with a **TYPO3 Site Set** (``Elements``) that can be included directly
   in your site configuration — no manual TypoScript template setup required.

*  TypoScript configuration is automatically loaded via the Site Set, keeping
   your root template clean.

TCA Configuration
-----------------

*  Extends ``tt_content`` with custom content element types registered via
   standard TYPO3 TCA Overrides.

*  Compatible with the ``friendsoftypo3/visual-editor`` extension for a
   streamlined editor experience.

Visual Editor Integration
-------------------------

*  Integrates with `FriendsOfTYPO3 Visual Editor <https://github.com/FriendsOfTYPO3/visual-editor>`__
   to provide a modern editing interface for content editors.
