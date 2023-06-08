## Composite Pattern (OOP) - Restaurant Menu Example

We are sharing some simple PHP code, showing the use of
the [Composite Pattern](https://en.wikipedia.org/wiki/Composite_pattern) to structure a restaurant menu. You will
see how modern versions of PHP, supporting Classes and Abstract Classes, make it easy to implement the Composite Pattern
using this language.

You can find the PHP 8.1 code
at [/app/src](https://github.com/harryrampr/OPP_Composite_Pattern-Rest_Menu_Example/tree/master/app/src), there is
testing at [/tests](https://github.com/harryrampr/OPP_Composite_Pattern-Rest_Menu_Example/tree/master/app/tests)
directory. HTML output with Tailwind CSS can be found
at [/app/public](https://github.com/harryrampr/OPP_Composite_Pattern-Rest_Menu_Example/tree/master/app/public)
directory.

### About the Pattern

The Composite Pattern is a structural design pattern
in [object-oriented programming (OOP)](https://en.wikipedia.org/wiki/Object-oriented_programming) that allows you to
treat a group of objects as a single object. It enables you to represent hierarchical structures of objects in a way
that clients can handle individual objects and compositions uniformly.

The Composite Pattern is a powerful tool for representing and manipulating complex hierarchies of objects. It promotes
code reuse, flexibility, and consistency by providing a unified interface for interacting with individual objects and
compositions.

### History

The Composite Pattern was first introduced by the "Gang of Four" (Erich Gamma, Richard Helm, Ralph Johnson, and
John Vlissides) in their seminal
book ["Design Patterns: Elements of Reusable Object-Oriented Software"](https://en.wikipedia.org/wiki/Design_Patterns),
published in 1994.
The book presented the Composite Pattern as one of the 23 essential design patterns for object-oriented programming.

The concept of the Composite Pattern is derived from the concept of recursive composition, which has been used in
various domains, including graphics, user interfaces, and file systems, for managing hierarchical structures. The Gang
of Four recognized the need for a design pattern that could represent part-whole hierarchies in a way that allows
clients to handle individual objects and compositions uniformly.

### Intent

The Composite Pattern is used when you need to represent a part-whole hierarchy of objects, where individual objects and
groups of objects are treated uniformly. It allows clients to interact with individual objects and compositions in a
transparent manner.

### Structure

The main components of the Composite Pattern are the component, leaf, and composite. The component is an abstract class
or interface that defines the common interface for all objects in the hierarchy. The leaf represents the individual
objects that have no child elements, and the composite represents the container objects that can contain both leaf
objects and other composite objects.

### How it Works

The composite object holds a collection of child components, which can be leaf objects or other composite objects. The
composite object implements the same interface as the individual objects, allowing clients to interact with it as if it
were a single object. The composite object can delegate operations to its child components recursively, aggregating the
results and treating the entire structure as a unified object.

### Benefits

- Simplifies the client code by treating individual objects and compositions uniformly.
- Allows for the creation of complex hierarchical structures that are easy to manipulate.
- Supports the [Open-Closed Principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle) by making it easy to
  add new types of components without modifying existing code.

### Applications

- **Hierarchical Structures:** The Composite Pattern is particularly useful for representing and working with
  hierarchical structures, such as organization charts, file systems, menus, or tree-like data structures. It allows you
  to treat individual objects and compositions uniformly, providing a consistent way to traverse and manipulate the
  structure.

- **User Interfaces:** User interface components often exhibit hierarchical relationships. The Composite Pattern can be
  applied to create a unified approach for handling UI components. For example, in a graphical user interface, a
  composite component (e.g., a window or panel) can contain child components (e.g., buttons, labels) in a hierarchical
  manner. The Composite Pattern allows you to manage and interact with the entire UI structure as a single object.

- G**raphics and Drawing:** The Composite Pattern is commonly used in graphics and drawing applications to represent
  complex shapes or scenes. The pattern allows you to build complex graphical objects by composing simpler objects. For
  example, a composite shape can be composed of individual shapes (such as circles or rectangles), enabling you to treat
  the composite shape and its individual components uniformly.

- **Menu Structures:** Menus in user interfaces often have a hierarchical structure, with menu items nested within
  submenus. The Composite Pattern provides an elegant solution for representing and managing menu structures. Each menu
  item can be a leaf object, while the submenus are composite objects that can contain other menu items, creating a
  unified approach to handle the menu hierarchy.

- **File Systems:** File systems exhibit a hierarchical structure with directories (folders) containing files and
  subdirectories. The Composite Pattern can be employed to represent the file system hierarchy, allowing you to treat
  both individual files and directories uniformly. It simplifies operations such as traversing the file system,
  calculating the total size, or performing operations on specific files or directories.

- **Component-based Architectures:** Component-based architectures benefit from the Composite Pattern by providing a
  consistent approach to handle components in a hierarchy. The pattern enables you to create complex systems by
  composing simpler components, treating the entire system as a unified object.

- **Document Structures:** The Composite Pattern is well-suited for representing document structures, such as documents
  composed of sections, subsections, paragraphs, and other elements. It allows you to handle the document structure
  uniformly, whether it is for rendering, searching, or manipulating the document content.

### Other Examples

A common example of the Composite Pattern is a file system hierarchy. In this case, a file system can be represented as
a tree-like structure, where both individual files (leaf objects) and directories (composite objects) are part of the
hierarchy. The composite object (directory) can contain multiple child components, which can be either individual files
or subdirectories. Clients can perform operations on the composite object (such as calculating the total size of the
file system) without needing to differentiate between leaf objects and composite objects.