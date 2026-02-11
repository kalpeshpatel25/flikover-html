# Antigravity UI Law
# Antigravity UI Law – v1.0

This document defines the permanent design and UI rules for all websites
built under the Antigravity system.

These rules are non-negotiable.
Any change requires a version update.

---

## 1. Design Philosophy

- System-first UI, not creative UI
- Predictable layouts
- Reusable patterns only
- No visual experimentation without system update

Additional Enforcement Rules:

- Always follow the approved Figma design or the attached reference screenshots.
- Follow existing UI patterns exactly as defined. Do not redesign, reinterpret, or "improve" components.
- Do not update spacing, layout, colors, typography, or structure unless the design system itself is officially updated.
- When creating a new module or section, it must strictly follow existing UI patterns (cards, buttons, spacing, grid, typography).
- New modules must feel like a natural extension of the current system — not a new design.
- If a design decision is unclear, ask for clarification instead of guessing.

---

## 2. Typography

- Font family: DM Sans
- No font mixing allowed
- Line height must be ≥ 1.4

Heading Weights:
- Default: 600
- Alternate: 500 (for lighter hierarchy)
- 700 may be used only if required by client specification or specific UI emphasis

Body Text:
- Default: 400
- 500 may be used when slightly stronger emphasis is needed

Rules:
- Do not randomly change font weights.
- Use consistent hierarchy across all pages.
- Do not introduce new weight variations beyond 400 / 500 / 600 / 700.

---

## 3. Color System

### Core Brand Colors
- Primary Color: #000000
- Secondary (Accent) Color: #DD2F10

---

### Text Colors
- Heading Color: #000000
- Body Primary Text: #3A3A3A
- Body Secondary Text: #000000
- Body Tertiary Text: #565656 (rarely use)
- Link Color: #BB1C00
- Error Text Color: #BB1C00

Rules:
- Headings must always use Heading Color.
- Body text must default to Body Primary Text.
- Tertiary text should be used sparingly (supporting information only).
- Link and Error colors must not be altered.

---

### Button Colors

#### Primary Button
- Surface: #000000
- Border: #000000
- Text: #FFFFFF

#### Primary Outline Button
- Surface: #FFFFFF
- Border: #000000
- Text: #000000

---

#### Secondary Button
- Surface: #DD2F10
- Border: #DD2F10
- Text: #FFFFFF

---

#### Tertiary Button
- Surface: #3279B7
- Border: #3279B7
- Text: #FFFFFF

#### Tertiary Outline Button
- Surface: #FFFFFF
- Border: #3279B7
- Text: #3279B7

---

### Global Color Rules
- No gradients.
- No new colors without updating tokens.json.
- Accent color (#DD2F10) must only be used for CTAs, highlights, or emphasis.
- Button colors must strictly follow the defined combinations.
- Do not override button colors in page-level CSS.

---

## 4. Layout System

### Container Rules

Standard Container:
- Max width: 1200px
- Center aligned
- Horizontal padding: 15px (left and right)

Full-Width Container:
- Width: 100%
- Horizontal padding: 15px (left and right)
- Used for full-width sections only (hero, background sections, etc.)

Page-Level Padding:
- Every page must maintain 15px padding from left and right edges.
- No content should touch viewport edges.

---

### Section Spacing

- Standard vertical spacing between sections: 50px
- No arbitrary spacing values allowed.
- Section spacing must remain consistent across all pages.

---

### Grid System

- Grid-based layouts only.
- Columns must align consistently within container width.
- No overlapping or floating layout elements.
- No absolute positioning unless strictly necessary for UI functionality.

---

### Layout Discipline Rules

- No free-floating elements.
- No random margin or padding overrides.
- No layout experimentation per page.
- All layouts must follow Figma or approved screenshots.
- If a new layout pattern is required, it must follow existing grid and spacing logic.

---

## 5. Containers (Cards)
- Card-based UI everywhere
- White surface
- Border OR soft shadow (never both)
- Border radius: 12px
- Padding: 16px–24px

---

## 6. Interaction Rules
- One primary action per section
- Interactions must feel expected
- No surprise animations
- Animations only when functional

---

## 7. CSS Architecture
- No inline styles
- No <style> tags in HTML
- global.css → common rules only
- style.css → system orchestrator
- Page-specific styles → /assets/css/pages/

---

## 8. Forbidden Forever

The following actions are strictly prohibited unless explicitly approved:

- Random spacing values.
- One-off component styling.
- New layout structures per page.
- Visual experiments.
- Redesigning components without updating the design system.

---

### Implementation Discipline Rules

- When instructed to modify or implement a specific section, you must only modify that specific section or file.
- Do not change existing layout structure unless explicitly permitted.
- Do not refactor unrelated code.
- Do not "improve" formatting of existing code.
- Do not reorganize file structure without approval.
- Do not rename classes or restructure markup unless instructed.
- Do not clean up, optimize, or modernize existing code unless permission is granted.

---

### Stability Rule

The existing coding structure is considered stable.

Unless explicitly instructed:
- Do not alter HTML hierarchy.
- Do not modify CSS structure.
- Do not reformat indentation.
- Do not move code blocks.
- Do not introduce new architectural patterns.

If unsure — ask before changing anything.