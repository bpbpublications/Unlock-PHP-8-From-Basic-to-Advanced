<?php
#[Description("This function returns the description of an animal.")]
function describeAnimal(string $name, string $type) {
    return "$name is a $type.";
}

echo describeAnimal(type: "cat", name: "meow");  // output: "meow is a cat."
  