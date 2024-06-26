<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-analyze](./kmc-analyze.md) &gt; [AnalyzeOskCharacterUse](./kmc-analyze.analyzeoskcharacteruse.md) &gt; [getStrings](./kmc-analyze.analyzeoskcharacteruse.getstrings.md)

## AnalyzeOskCharacterUse.getStrings() method

Returns the collected results from earlier calls to [AnalyzeOskCharacterUse.analyze()](./kmc-analyze.analyzeoskcharacteruse.analyze.md)<!-- -->. This generates a mapping from a key cap (one or more characters) to a PUA code, for use with `&displayMap`<!-- -->.

Three output formats are supported:

- .txt: tab-separated string format, with three columns: PUA, Key Cap, and plain string. The PUA and Key Cap columns are formatted as Unicode Scalar Values, e.g. U+0061, and the plain string is the original key cap string.

- .md: formatted for documentation purposes. Generates a Markdown table (GFM) with PUA, Key Cap, and plain string. The PUA and Key Cap columns are formatted as Unicode Scalar Values, e.g. U+0061, and the plain string is the original key cap string.

- .json: returns the final aggregated data as an array of strings, which can be joined to form a JSON blob of an object with a single member, `map`<!-- -->, which is an array of  objects.

**Signature:**

```typescript
getStrings(format?: '.txt' | '.md' | '.json'): string[];
```

## Parameters

|  Parameter | Type | Description |
|  --- | --- | --- |
|  format | '.txt' \| '.md' \| '.json' | _(Optional)_ file format to return - can be '.txt', '.md', or '.json' |

**Returns:**

string\[\]

an array of strings, formatted according to the `format` parameter.

