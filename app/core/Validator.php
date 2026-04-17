<?php

/**
 * CoreXPHP Validator Engine
 * Built for Empowro Craft Architecture
 * No namespaces allowed.
 */
class Validator {
    private array $errors = [];
    private array $rules = [];
    private array $validatedData = [];

    /**
     * Set validation rules and support method chaining.
     */
    public function rules(array $rules): self {
        $this->rules = $rules;
        return $this;
    }

    /**
     * Execute validation against provided data.
     */
    public function validate(array $data): self {
        foreach ($this->rules as $field => $ruleString) {
            $rules = explode('|', $ruleString);
            $value = $data[$field] ?? null;

            // Handle 'nullable' flag to skip validation if field is empty
            if (in_array('nullable', $rules) && ($value === null || $value === '')) {
                $this->validatedData[$field] = null;
                continue;
            }

            foreach ($rules as $rule) {
                if ($rule === 'nullable') continue;

                $parts = explode(':', $rule);
                $method = $parts[0];
                $param = $parts[1] ?? null;

                if (method_exists($this, $method)) {
                    $this->$method($field, $value, $param);
                }
            }

            // If no errors occurred for this field, add to validated data
            if (!isset($this->errors[$field])) {
                $this->validatedData[$field] = $value;
            }
        }
        return $this;
    }

    /**
     * Check if validation failed.
     */
    public function fails(): bool {
        return !empty($this->errors);
    }

    /**
     * Return all validation errors.
     */
    public function errors(): array {
        return $this->errors;
    }

    /**
     * Return only sanitized and validated data.
     * Crucial for preventing mass-assignment vulnerabilities.
     */
    public function validated(): array {
        return $this->validatedData;
    }

    // --- Core Validation Rules ---

    private function required($field, $value): void {
        if ($value === null || (is_string($value) && trim($value) === '')) {
            $this->errors[$field] = "The " . str_replace('_', ' ', $field) . " field is required.";
        }
    }

    private function email($field, $value): void {
        if (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "The $field must be a valid email address.";
        }
    }

    private function min($field, $value, $param): void {
        if (!empty($value) && strlen((string)$value) < (int)$param) {
            $this->errors[$field] = "The $field must be at least $param characters.";
        }
    }

    private function max($field, $value, $param): void {
        if (!empty($value) && strlen((string)$value) > (int)$param) {
            $this->errors[$field] = "The $field must not exceed $param characters.";
        }
    }

    private function numeric($field, $value): void {
        if (!empty($value) && !is_numeric($value)) {
            $this->errors[$field] = "The $field must be a valid number.";
        }
    }

    private function in($field, $value, $param): void {
        $options = explode(',', $param);
        if (!empty($value) && !in_array($value, $options)) {
            $this->errors[$field] = "The $field must be one of: " . implode(', ', $options) . ".";
        }
    }
}